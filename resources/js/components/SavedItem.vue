<template>
    <div class="col-12">
        <div class="row mt-3">
            <div class="col-2 ">

                <a :href="`/shop/${item.model.slug}`">
                    <img
                        :src="'/storage/'+item.model.image" class="img-fluid"
                        alt=""></a>
            </div>
            <div class="col-4">
                <!--                        {{route('shop.show',$item->model->slug)}}-->
                <a :href="`/shop/${item.model.slug}`" class="text-dark h5">
                    {{ item.name }}
                </a>
                <p>
                    {{ item.model.details }}
                </p>
            </div>
            <div class="col-1"></div>
            <div class="col-2">
                ${{ item.model.price }}
            </div>
            <div class="col-3 text-right">
                <!--                        {{route('shop.saved.remove',$item->rowId)}}-->
                <button class="btn btn-link text-danger" @click="remove()" style="cursor: pointer"
                        :class="{disabled:isDisable}"
                >Remove
                </button>
                <br>
                <!--                        {{route('shop.saved.switchToCart',$item->rowId)}}-->

                <a @click="addToCart()" style="cursor: pointer" class="text-info" v-if="btn_show">Add to cart</a>

            </div>

            <div class="col-12 mt-2" style="height: 2px; background-color: #1a202c2f"></div>
        </div>
    </div>


</template>
<script>
import axios from "axios";

export default {
    props: ['item', 'index'],
    data() {
        return {
            isDisable: false,
            btn_show: true
        }
    },
    methods: {
        addToCart() {
            axios.post(`/switchToCart/${this.item.rowId}`).then(res => {
                this.$emit('switchToCart', this.index, res.data.message)
                this.$toast.success('Added to cart')
            }).catch(err => {
                this.$toast.warning(err.response.data.message);
                this.btn_show = false
            })
        },
        remove() {
            this.isDisable = true;
            if (confirm('Really?')) {
                axios.delete(`/saved/${this.item.rowId}/remove`).then(res => {
                    $(this.$el).fadeOut(400, () => this.$emit('removeInCart', this.index));
                }).catch(err => this.$toast.error('sorry somethings went wrong'));
            }
        }
    }
}
</script>
