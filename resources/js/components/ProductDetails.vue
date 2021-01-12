<template>
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div>
                <img :src="mainImageUrl" alt="image not found"
                     :class="{'opacity-zero':opacity_zero}"
                     class="img-fluid card-img">
            </div>
            <div class="text-center" v-if="isLoading">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
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
                <div class="col-sm-8">
                    <label class="control-label">Quantity</label>
                    <div class="row">
                        <div class="col-sm-6" v-if="!isInCart">
                            <div class="form-group">
                                <input type="number" class="form-control" v-model="quantity">
                            </div>
                        </div>

                        <div class="col-sm-6" v-if="!isInCart">
                            <button type="submit" class="btn btn-primary btn-block" @click="addToCart">Add to Cart
                            </button>
                        </div>
                        <div class="col-sm-12" v-if="isInCart">
                            <button type="submit" class="btn btn-primary btn-block disabled">Already added
                                {{ filteredCart['qty'] }} items in
                                Cart
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
    props: ['product'],
    data() {
        return {
            mainImageUrl: '',
            subImages: [],
            thumbnailImagesUrl: [],
            opacity_zero: false,
            isLoading: true,
            quantity: 1,
            isInCart: false,
            // inCartQuantity: 0,
            filteredCart: {},
            cart: {}
        }
    },
    watch: {
        quantity() {
            this.quantity = this.quantity <= 0 ? 1 : this.quantity;
        }
    },
    methods: {
        productImage(path, isMain, isLast) {
            this.isLoading = true;
            axios.post('/product-image', {path: path}).then(res => {
                if (isMain) {
                    this.mainImageUrl = res.data.imageUrl;
                }
                this.thumbnailImagesUrl.push(res.data.imageUrl);
                this.isLoading = isLast ? false : this.isLoading;
            });
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
                    this.opacity_zero = false
                }, 300);
            }
        },
        addToCart() {
            axios.post('/cart', {
                id: this.product.id,
                price: this.product.price,
                quantity: this.quantity,
                name: this.product.name
            }).then(res => {
                this.$toast.success(res.data.message)
                this.isInCart = true;
                this.filteredCart['qty'] = res.data.qty
            }).catch(err =>
                this.$toast.error('cannot be added'))
        }
    },
    created() {
        this.productImage(this.product.image, true);
        this.subImages = JSON.parse(this.product.images);
        this.subImages.forEach((subImage, index, array) => {
            this.productImage(subImage, false, (index === array.length - 1));
        })
        axios.get('/cart/items').then(res => {
            this.cart = res.data.cart;
            for (const property in this.cart) {
                if (this.cart[property]['id'] === this.product.id) {
                    this.filteredCart = this.cart[property];
                    this.isInCart = true;
                }
            }
        }).catch(err => {

        })
    }
}
</script>
