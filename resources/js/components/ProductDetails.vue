<template>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div>
                <img
                    :src="mainImageUrl"
                    alt="image not found"
                    :class="{ 'opacity-zero': opacity_zero }"
                    class="img-fluid card-img"
                />
            </div>
            <br />
            <div class="row">
                <div
                    class="col-4"
                    v-for="(thumbnailImageUrl, index) in thumbnailImagesUrl"
                    :key="index"
                >
                    <div
                        class="product-section-thumbnail border"
                        :class="{
                            'border-primary': isActive(thumbnailImageUrl)
                        }"
                        @click="activeImage(thumbnailImageUrl)"
                    >
                        <img
                            :src="thumbnailImageUrl"
                            alt=""
                            class="img-fluid img-thumbnail thumbnail-image"
                        />
                    </div>
                    <br />
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xs-12">
            <h2>{{ product.name }}</h2>
            <h5 class="badge badge-pill" :class="stock_level_badge">
                {{ stockLevel }}
            </h5>
            <br />
            <h5>{{ product.details }}</h5>

            <star-rating
                :rating="avgRating"
                :star-size="14"
                :rounded-corners="true"
                :read-only="true"
                :increment="0.1"
            ></star-rating>
            <br />
            <p class="lead mb-0">
                <strong class="text-danger mb-0">{{
                    product.presetPrice
                }}</strong>
            </p>
            <br />

            <p class="lead mb-0" v-html="product.description"></p>

            <br />

            <div class="row" v-if="isAvailable">
                <div class="col-sm-12" v-if="!isInCart">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <button
                                class="btn btn-sm btn-warning mb-4"
                                @click="checkAuth"
                            >
                                Give Rating
                            </button>

                            <star-rating
                                v-if="isAuth"
                                :rating="rating"
                                :star-size="40"
                                :rounded-corners="true"
                                @rating-selected="setRating"
                            ></star-rating>
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label">Quantity</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input
                                            type="number"
                                            class="form-control"
                                            v-model="quantity"
                                        />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block "
                                        @click="addToCart"
                                        :class="{ disabled: btn_disable }"
                                    >
                                        <div
                                            class="spinner-border text-dark spinner-grow-sm mr-3"
                                            v-if="isLoading"
                                            role="status"
                                        >
                                            <span class="sr-only"
                                                >Loading...</span
                                            >
                                        </div>
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" v-if="isInCart">
                    <div class="row">
                        <div class="col-sm-8">
                            <button
                                class="btn btn-outline-dark btn-block disabled"
                            >
                                Already added {{ filteredCart["qty"] }} items in
                                Cart
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <button
                                @click="removeFormCart"
                                class="btn btn-danger"
                                :class="{ disabled: btn_disable }"
                            >
                                <div
                                    class="spinner-border spinner-grow-sm mr-3 text-dark"
                                    v-if="isLoading"
                                    role="status"
                                >
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Remove this item
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
img {
    transition: 200ms;
}

.opacity-zero {
    opacity: 0;
}
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s;
}

.fade-enter,
.fade-leave-to
/* .fade-leave-active in <2.1.8 */

 {
    opacity: 0;
}
</style>
<script>
import axios from "axios";
import StarRating from "vue-star-rating";

export default {
    props: ["product", "cart", "subImgUrls", "stockThreshold", "isAuth"],
    data() {
        return {
            mainImageUrl: this.product.mainImgUrl,
            thumbnailImagesUrl: this.subImgUrls,
            opacity_zero: false,
            isLoading: false,
            quantity: 1,
            isInCart: false,
            filteredCart: {},
            btn_disable: false,
            data_cart: this.cart,
            stock_level_badge: "badge-success",
            isAvailable: true,
            rating: 0,
            avgRating: 0
        };
    },
    components: {
        StarRating
    },
    watch: {
        quantity() {
            const limited = this.product.quantity;
            if (limited < this.quantity) {
                this.quantity = limited;
                this.$toast.warning("Sorry...Exceeded stock level :'(");
            } else {
                this.quantity = this.quantity <= 0 ? 1 : this.quantity;
            }
        }
    },
    computed: {
        stockLevel() {
            const stockThreshold = parseInt(this.stockThreshold);
            const product_quantity = parseInt(this.product.quantity);

            if (product_quantity >= stockThreshold) {
                this.stock_level_badge = "badge-success";
                return "In Stock";
            } else if (
                product_quantity < stockThreshold &&
                product_quantity > 0
            ) {
                this.stock_level_badge = "badge-warning";
                return "Low Stock";
            } else {
                this.stock_level_badge = "badge-danger";
                this.isAvailable = false;
                return "Not Available";
            }
        }
    },
    methods: {
        checkAuth() {
            if (!this.isAuth) {

                if (confirm("You need to login to rate this product")) {
                    location.href=process.env.MIX_APP_URL+'/login';
                }
            }
        },
        setRating(rating) {
            this.$insProgress.start();

            axios
                .post(
                    `/shop/products/${this.product.id}/rating?_method=PATCH`,
                    {
                        rating: rating
                    }
                )
                .then(res => {
                    this.rating = rating;
                    this.avgRating = res.data.avgRating;
                })
                .catch(err => console.log(err.response))
                .finally(_ => this.$insProgress.finish());
        },
        isActive(image) {
            return image === this.mainImageUrl;
        },
        activeImage(image) {
            let temp;
            if (image !== this.mainImageUrl) {
                this.opacity_zero = true;
                setTimeout(() => {
                    temp = this.mainImageUrl;
                    this.mainImageUrl = image;
                    image = temp;
                    this.opacity_zero = false;
                }, 300);
            }
        },
        addToCart() {
            if (this.btn_disable === false) {
                this.btn_disable = true;
                this.isLoading = true;
                axios
                    .post("/cart", {
                        id: this.product.id,
                        price: this.product.price,
                        quantity: this.quantity,
                        name: this.product.name,
                        product_quantity: this.product.quantity
                    })
                    .then(res => {
                        this.$toast.success(res.data.message);
                        this.isInCart = true;
                        this.data_cart = res.data.cart;
                        this.filterCart(res.data.cart);
                        this.btn_disable = false;
                        this.isLoading = false;
                    })
                    .catch(err => {
                        this.isLoading = false;
                        this.$toast.error("cannot be added");
                        if (err.response.data.message) {
                            this.$toast.error(err.response.data.message);
                        }
                        location.reload();
                    });
            }
        },
        removeFormCart() {
            if (this.btn_disable === false) {
                this.btn_disable = true;
                this.isLoading = true;
                axios
                    .delete(`/cart/${this.filteredCart.rowId}/remove`)
                    .then(res => {
                        this.isInCart = false;
                        this.$toast.success(res.data.message);
                        this.btn_disable = false;
                        this.isLoading = false;
                    })
                    .catch(err => {
                        this.$toast.error("sorry something wrong");
                        this.isLoading = false;
                        location.reload();
                    });
            }
        },
        filterCart(cart) {
            for (const property in cart) {
                if (cart[property]["id"] === this.product.id) {
                    this.filteredCart = cart[property];
                    this.isInCart = true;
                }
            }
        }
    },
    created() {
        this.filterCart(this.data_cart);
        this.avgRating = this.product.avgRating;
        this.rating = this.product.userRating;
    }
};
</script>
