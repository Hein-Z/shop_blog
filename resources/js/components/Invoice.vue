<template>
    <div class="col-12 mt-5">
        <div class="alert alert-dark" role="alert">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>Shipping is free because we are awesome like that. UwU</p>
                    <p class="text-dark">{{ success_feedback }}</p>
                    <p class="text-danger">{{ error_feedback }}</p>
                </div>
                <div class="col-12 col-md-6 align-items-around text-right"
                     style="line-height: 1.7rem">
                    <div class="d-flex justify-content-between">
                        <strong class="text-muted">SubTotal</strong>
                        <strong class="text-muted">${{ parseFloat(dataBills['subtotal']).toFixed(2) }}</strong>
                    </div>

                    <div class="d-flex justify-content-between" v-if="dataCoupon">
                        <div class="d-flex justify-content-start ">
                            <strong class="text-muted pr-1">Discount
                                ({{ dataCoupon['name'] }})</strong>

                            <a @click="removeDiscount" class="text-danger mt-0">remove </a>
                        </div>
                        <strong class="text-muted">-${{ parseFloat(dataBills['discount']).toFixed(2) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between" v-if="dataCoupon">
                        <strong class="text-muted">New subtotal</strong>
                        <strong
                            class="text-muted">${{ parseFloat(dataBills['newSubtotal']).toFixed(2) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between" v-if="!dataCoupon">
                        <strong class="text-muted">Tax</strong>
                        <strong class="text-muted">${{ parseFloat(dataBills['tax']).toFixed(2) }}</strong>

                    </div>
                    <div class="d-flex justify-content-between" v-if="!dataCoupon">
                        <strong class="text-muted">Total</strong>
                        <strong
                            class="text-muted">${{ parseFloat(dataBills['total']).toFixed(2) }}</strong>
                    </div>
                    <div class="d-flex justify-content-between" v-if="dataCoupon">
                        <strong class="text-muted">New Tax</strong>
                        <strong class="text-muted">${{ parseFloat(dataBills['newTax']).toFixed(2) }}</strong>

                    </div>
                    <div class="d-flex justify-content-between" v-if="dataCoupon">
                        <strong>New Total</strong>
                        <strong>${{ parseFloat(dataBills['newTotal']).toFixed(2) }}</strong>
                    </div>

                </div>
            </div>
            <hr>
        </div>
    </div>
</template>
<style>

</style>
<script>
import axios from "axios";

export default {
    name: 'invoice',
    props: {
        bills: {
            type: Object
        },
        coupon: {
            type: Object
        }
    },
    watch:{
      bills(){
          this.dataBills = this.bills;
      }
    },
    data() {
        return {
            feedback: '',
            loading: false,
            dataCoupon: {},
            dataBills: {},
            error_feedback: '',
            success_feedback: ''
        }
    },
    methods: {
        removeDiscount() {
            this.loading = true;
            axios.delete(`/coupon`).then(res => {
                this.dataBills = res.data;
                this.dataCoupon = null;
                this.success_feedback = 'successfully removed discount coupon';
                this.loading = false;
            }).catch(err => {
                this.loading = false;
                this.error_feedback = 'sorry something went wrong'
            })
        }
    },
    created() {
        this.dataBills = this.bills;
        this.dataCoupon = this.coupon;
    }
}
</script>
