<template>
    <div class="col-12">
        <div class="row mt-3">
            <div class="col-2 ">
                <!--                        href="{{route('shop.show',$item->model->slug)}}"-->
                <a :href="`/shop/${item.model.slug}`">
                    <!--                            {{productImage($item->model->image)}}-->
                    <img
                        :src="'/storage/'+ item.model.image" class="img-fluid"
                        alt=""></a>
            </div>
            <div class="col-4">
                <!--                        {{route('shop.show',$item->model->slug)}}-->
                <a class="btn btn-link " :href="`/shop/${item.model.slug}`">
                    {{ item.name }}
                </a>
                <p>
                    {{ item.model.details }}
                </p>
            </div>
            <div class="col-1"></div>
            <div class="col-1 text-right" v-if="isChanging">
                <form @submit.prevent="submitQuantity">
                    <input class="quantity" type="number"
                           style="width: 50px"
                           v-model="quantity"
                    >
                </form>
                <a class="h3 text-dark" style="cursor: pointer;" @click="submitQuantity">
                    <i class="fa fa-check-square"></i>
                </a>
            </div>
            <div class="col-1 " v-if="!isChanging" @click="onChange" style="cursor: pointer">
                <div class="d-flex flex-column  border border-dark justify-content-center rounded position-relative"
                     style="height: 30px">
                    <div class=" text-center h5">
                        {{ item.qty }}
                    </div>
                    <span class="text-light bg-dark badge badge-dark rounded-pill  h5 position-absolute "
                          style="top:0; left:100%; transform: translate(-50%,-40%);cursor: pointer">
                        <i class="fa fa-edit"></i>
                    </span>
                </div>
            </div>

            <div class="col-1">${{ item.price }}</div>
            <div class="col-3 text-right">
                <button @click="remove" :class="{disabled:isDisable}" class="btn btn-link text-danger"
                        style="cursor: pointer">Remove
                </button>
                <br>
                <button :class="{disabled:isDisable}" style="cursor:pointer;" class="btn btn-link text-info"
                        @click="saveForLater" v-if="btn_show">save for later
                </button>

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
            isChanging: false,
            quantity: this.item.qty,
            btn_show: true
        }
    },
    watch: {
        quantity() {
            this.quantity = this.quantity <= 0 ? 1 : this.quantity;
        }
    },
    methods: {
        saveForLater() {
            this.isDisable = true;
            axios.post(`/switchToSaved/${this.item.rowId}`).then(res => {
                $(this.$el).fadeOut(400, () => this.$emit('saveForLater', this.index, res.data.message));
                this.$toast.success('successfully saved')
                this.isDisable = false;
            }).catch(err => {
                    this.$toast.warning(err.response.data.message)
                    this.btn_show = false;
                    this.isDisable = false;
                }
            );
        },
        remove() {
            this.isDisable = true;
            if (confirm('Really?')) {
                axios.delete(`/cart/${this.item.rowId}/remove`).then(res => {
                    $(this.$el).fadeOut(400, () => this.$emit('removeInCart', this.index));
                }).catch();
            }
        },
        onChange() {
            this.isChanging = true;
        },
        submitQuantity() {
            if (this.quantity !== this.item.qty) {
                axios.patch(`/cart/${this.item.rowId}`, {quantity: this.quantity}).then(
                    res => {
                        this.item.qty = this.quantity;
                        this.$emit('submitQuantity', res.data.bills);
                    }
                ).catch(
                    err => this.$toast.error(err.response.data.errors.quantity[0])
                )
            }
            this.isChanging = false;
        }
    }
}
</script>
