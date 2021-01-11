<template>
    <div class="row">
        <ul class="col-12 list-group mt-5 list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-6">
                        <em>Sub-total</em>
                    </div>

                    <div class="col-6 text-right">
                        <strong>${{ parseFloat(dataBills['subtotal']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>


            <li class="list-group-item" v-if="dataCoupon">
                <div class="row">
                    <div class="col-8">
                        <em>Discount ({{ dataCoupon['name'] }})</em>
                        <form class="mb-0"
                              method="post">

                            <a @click="removeDiscount" class="text-danger">remove</a>
                        </form>
                    </div>
                    <div class="col-4 text-right">
                        <strong>$-{{ parseFloat(dataBills['discount']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>
            <li class="list-group-item" v-if="dataCoupon">
                <div class="row">
                    <div class="col-6">
                        <em>New subtotal</em>
                    </div>

                    <div class="col-6 text-right">
                        <strong>${{ parseFloat(dataBills['newSubtotal']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>


            <li class="list-group-item" v-if="!dataCoupon">
                <div class="row">
                    <div class="col-6">
                        <em>Tax</em>
                    </div>

                    <div class="col-6 text-right">
                        <strong>${{ parseFloat(dataBills['tax']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>

            <li class="list-group-item" v-if="!dataCoupon">
                <div class="row">
                    <div class="col-6">
                        <strong>Total</strong>
                    </div>

                    <div class="col-6 text-right">
                        <strong>${{ parseFloat(dataBills['total']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>

            <li class="list-group-item" v-if="dataCoupon">
                <div class="row">
                    <div class="col-6">
                        <em>New Tax</em>
                    </div>

                    <div class="col-6 text-right">
                        <strong>${{ parseFloat(dataBills['newTax']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>
            <li class="list-group-item" v-if="dataCoupon">
                <div class="row">
                    <div class="col-6">
                        <strong>Total</strong>
                    </div>

                    <div class="col-6 text-right">
                        <strong>${{ parseFloat(dataBills['newTotal']).toFixed(2) }}</strong>
                    </div>
                </div>
            </li>
        </ul>
        <h5 class="col-12 mt-5 ">Have a coupon?</h5>
        <div class="col-12 my-3">
            <div class="d-flex">
                <input
                    class="col-8 border-dark py-1 border" v-model="coupon_code"
                    type="text">
                <button type="submit" class="col-4 btn btn-outline-dark" @click="couponAdd">Submit</button>
            </div>
        </div>

        <div class="alert alert-danger col-12" role="alert" v-if="error_feedback">
            <ul>
                <li>{{ error_feedback }}</li>
            </ul>
        </div>

        <div class="alert alert-dark col-12" role="alert" v-if="success_feedback">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ success_feedback }}
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: {
        bills: {
            type: Object
        },
        coupon: {
            type: Object
        }
    },
    data() {
        return {
            feedback: '',
            loading: false,
            dataCoupon: {},
            dataBills: {},
            success_feedback: '',
            error_feedback: '',
            coupon_code: ''
        }
    },
    methods: {
        removeDiscount() {
            this.loading = true;
            axios.delete(`/coupon`).then(res => {
                this.dataBills = res.data;
                this.dataCoupon = null;
                this.feedback = 'successfully removed discount coupon';
                this.loading = false;
            }).catch(err => {
                this.loading = false;
                this.feedback = 'sorry something went wrong'
            })
        },
        couponAdd() {
            this.loading = true;
            axios.post('/coupon', {coupon_code: this.coupon_code}).then(res => {
                    this.loading = false;
                    if (res.data.invalid) {
                        this.error_feedback = 'invalid coupon code';
                        this.success_feedback = '';
                    } else {
                        this.error_feedback = '';
                        this.success_feedback = 'successfully added coupon code';
                        this.dataBills = res.data.bills;
                        this.dataCoupon = res.data.coupon;
                    }
                }
            ).catch();
        }
    },
    created() {
        this.dataBills = this.bills;
        this.dataCoupon = this.coupon;
    }
}
</script>
