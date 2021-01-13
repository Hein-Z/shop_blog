<template>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div>
                <img :src="mainImageUrl" alt="image not found"
                     :class="{'opacity-zero':opacity_zero}"
                     class="img-fluid card-img">
            </div>
            <br>
            <div class="row">
                <div class="col-4" v-for="(thumbnailImageUrl,index) in thumbnailImagesUrl" :key="index">
                    <div class="product-section-thumbnail border"
                         :class="{'border-primary':isActive(thumbnailImageUrl)}"
                         @click="activeImage(thumbnailImageUrl)">
                        <img :src="thumbnailImageUrl" alt=""
                             class="img-fluid img-thumbnail thumbnail-image">
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xs-12">
            <h2>{{ product.name }}</h2>
            <br>
            <h5>{{ product.details }}</h5>
            <br>
            <p class="lead">
                <strong class="text-danger">{{ product.presetPrice }}</strong>
            </p>
            <br>

            <p class="lead" v-html="product.description">
            </p>

            <br>

            <div class="row">
                <!--                <div class="col-sm-4">-->
                <!--                    <label class="control-label">Size</label>-->
                <!--                    <div class="form-group">-->
                <!--                        <select class="form-control" name="size">-->
                <!--                            <option value="0" selected>Fixed</option>-->
                <!--                        </select>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="col-sm-12" v-if="!isInCart">
                    <label class="control-label">Quantity</label>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="number" class="form-control" v-model="quantity">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-block " @click="addToCart"
                                    :class="{disabled:btn_disable}">
                                <div class="spinner-border text-dark spinner-grow-sm mr-3" v-if="isLoading" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" v-if="isInCart">
                    <div class="row">
                        <div class="col-sm-8">
                            <button class="btn btn-outline-dark btn-block disabled">Already added
                                {{ filteredCart['qty'] }} items in Cart
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <button @click="removeFormCart" class="btn btn-danger" :class="{disabled:btn_disable}">
                                <div class="spinner-border spinner-grow-sm mr-3 text-dark" v-if="isLoading" role="status">
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
</style>
<script>
import axios from "axios";

export default {
    props: ['product', 'cart', 'subImgUrls'],
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
            data_cart: this.cart
        }
    },
    watch: {
        quantity() {
            this.quantity = this.quantity <= 0 ? 1 : this.quantity;
        }
    },
    methods: {
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
                    this.opacity_zero = false
                }, 300);
            }
        },
        addToCart() {
            if (this.btn_disable === false) {
                this.btn_disable = true;
                this.isLoading = true;
                axios.post('/cart', {
                    id: this.product.id,
                    price: this.product.price,
                    quantity: this.quantity,
                    name: this.product.name
                }).then(res => {
                    this.$toast.success(res.data.message)
                    this.isInCart = true;
                    this.data_cart = res.data.cart
                    this.filterCart(res.data.cart);
                    this.btn_disable = false;
                    this.isLoading = false;
                }).catch(err => {
                        this.$toast.error('cannot be added')
                        this.isLoading = false;
                    }
                )
            }
        },
        removeFormCart() {
            if (this.btn_disable === false) {
                this.btn_disable = true;
                this.isLoading = true;
                axios.delete(`/cart/${this.filteredCart.rowId}/remove`).then(res => {
                        this.isInCart = false;
                        this.$toast.success(res.data.message)
                        this.btn_disable = false;
                        this.isLoading = false;
                    }
                ).catch(err => {
                    this.$toast.error('sorry something wrong')
                    this.isLoading = false;
                });
            }
        },
        filterCart(cart) {
            for (const property in cart) {
                if (cart[property]['id'] === this.product.id) {
                    this.filteredCart = cart[property];
                    this.isInCart = true;
                }
            }
        }
    }, created() {
        this.filterCart(this.data_cart);
    }
}
</script>
