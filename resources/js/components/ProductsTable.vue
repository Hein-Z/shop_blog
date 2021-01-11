<template>
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item pt-1"><a href="/" class="text-dark">Home</a></li>
                <li class="breadcrumb-item pt-1"><a href="#" class="text-danger">Shop</a></li>
                <li class="align-self-end ml-auto pt-2 pt-sm-0">
                    <form @submit.prevent="search" class="ml-auto position-relative" method="GET">
                        <input type="search" v-model="searched_value"
                               style="border-radius: 6px;width: 300px;padding-right: 35px"
                               class="form-control">
                        <a class="text-danger" style="cursor: pointer"><i
                            class="fa fa-search position-absolute"
                            style="top:10px; right: 13px" @click="search"></i></a>
                    </form>
                </li>
            </ol>

        </nav>
        <h3 class="mt-5" id="offset-pos">search result for "{{ query_value }}"</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="(product, index) in products_data" :key="index">
                <th scope="row">{{ index + 1 }}</th>
                <td><a href="#"> {{ product.name }}</a></td>
                <td class="m-0 p-0 py-1"><a href="#"><img
                    :src='"/storage/"+(product.image)' width="100px" alt=""></a>
                </td>
                <td>
                    {{ product.details }}
                </td>
                <td>${{ product.price }}</td>
            </tr>

            <tr class="text-danger text-center " v-if="!products">
                <th colspan="5" class="py-5 h1">No results found</th>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name:'productTable',
    props: ['products', 'query'],
    data() {
        return {
            searched_value: '',
            products_data: [],
            query_value: ''
        }
    },
    methods: {
        search() {
            axios.post('/api/shop/products/search', {query: this.searched_value}).then(
                res => {
                    this.products_data = res.data;
                    this.query_value = this.searched_value;
                }
            ).catch(
                err => console.log(err)
            )
            ;
        }
    },
    created() {
        this.products_data = this.products;
    }
}
</script>
