<template>
    <div class="col-12 col-md-8 px-5">
        <div class="row">
            <h5 class="col-12 py-3"><span class="text-danger">{{ Object.keys(data_cart).length }} items</span> in your
                cart...</h5>

            <div class="col-12 " style="height: 2px; background-color: #1a202c2f"></div>
            <div class="col-12 my-5" v-if="Object.keys(data_cart).length<=0"> There is no item in your shopping cart
            </div>
            <cart-item v-for="(item,index) in data_cart" :key="item.model.slug+item.rowId" :index="index" :item="item"
                       @removeInCart="removeInCart"
                       @saveForLater="getCartData"
                       @submitQuantity="updateBills"
            >
            </cart-item>
            <div class="col-12 text-right mt-5" v-if="Object.keys(data_cart).length>0">
                <button type="submit" class="btn btn-outline-danger" @click="clearCart">Clear shopping cast</button>
            </div>

            <invoice :bills="data_bills" :coupon="coupon"></invoice>
            <!--            @if(!\Cart::instance('default')->content()->isEmpty())-->
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <!--                    {{route('shop.index')}}-->
                    <a href="/shop" class="btn btn-outline-dark">Continue
                        shopping</a>
                    <!--                    {{route('shop.checkout')}}-->
                    <a href="/checkout" class="btn btn-success">
                        Checkout
                    </a>
                </div>
            </div>
            <!--            @endif-->
            <h5 class="col-12 py-3 mt-5"><span
                class="text-danger">{{ Object.keys(data_saved).length }} saved items</span> in your cart...
            </h5>
            <div class="col-12 mb-1" style="height: 2px; background-color: #1a202c2f"></div>
            <div class="col-12 my-5" v-if="Object.keys(data_saved).length<=0"> There is no item saved for later</div>
            <saved-item v-for="(item,index) in data_saved" :key="index" :index="index" :item="item"
                        @removeInSave="removeInSaved"
                        @switchToCart="getCartData"
            >
            </saved-item>
            <div class="col-12 mt-2 text-right mb-5" v-if="Object.keys(data_saved).length>0">
                <button type="submit" class="btn btn-outline-danger" @click="clearSaved">Clear saved items</button>
            </div>
        </div>
    </div>

</template>

<script>
import axios from "axios";
import invoice from './Invoice';
import cartItem from './CartItem';
import savedItem from './SavedItem'

export default {
    props: ['coupon'],
    components: {
        invoice,
        cartItem,
        savedItem
    },
    data() {
        return {
            data_coupon: {},
            data_bills: {},
            data_cart: {},
            data_saved: {}
        }
    },
    methods: {
        removeInCart(id, bills) {
            this.data_cart = Object.keys(this.data_cart).filter(item_id => {
                return id !== item_id;
            }).reduce((obj, key) => {
                obj[key] = this.data_cart[key];
                return obj;
            }, {});
            this.data_bills = bills;
            this.$toast.success('successfully removed')
        },
        removeInSaved(id) {
            this.data_saved = Object.keys(this.data_saved).filter(item_id => {
                return id !== item_id;
            }).reduce((obj, key) => {
                obj[key] = this.data_saved[key];
                return obj;
            }, {});
            this.$toast.success('successfully removed')
        },
        clearCart() {
            this.loading = true;
            if (confirm('Really?')) {
                axios.delete('/cart/empty').then(res => {
                    this.loading = false;
                    this.data_cart = [];
                    this.data_bills = res.data.bills;
                }).catch(err => {
                    this.loading = false;
                    this.$toast.error('sorry something went wrong')
                });
            }
        },
        clearSaved() {
            this.loading = true;
            if (confirm('Really?')) {
                axios.delete('/saved/empty').then(res => {
                    this.loading = false;
                    this.data_saved = [];
                }).catch(err => {
                    this.loading = false;
                    this.$toast.error('sorry something went wrong')
                });
            }
        },
        getCartData() {
            this.loading = true;
            axios.get('/cart/data').then(res => {
                this.data_bills = res.data.bills;
                this.data_cart = res.data.cart;
                this.data_saved = res.data.saved;
                this.loading = false;
            }).catch(err => {
                this.$toast.error('sorry something went wrong')
            })
        },
        updateBills(bills) {
            this.data_bills = bills;
        }
    },
    created() {
        this.getCartData();
    }
}
</script>
