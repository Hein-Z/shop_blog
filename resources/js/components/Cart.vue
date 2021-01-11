<template>
    <div class="col-12 col-md-8 px-5">
        <div class="row">
            <h5 class="col-12 py-3"><span class="text-danger">Items</span> in your cart...</h5>

            <div class="col-12 " style="height: 2px; background-color: #1a202c2f"></div>
<!--            @if(\Cart::instance('default')->content()->isEmpty())-->
            <div class="col-12 my-5"> There is no item in your shopping cart</div>
<!--            @endif-->
<!--            @foreach(\Cart::instance('default')->content() as $item)-->
            <div class="col-12">
                <div class="row mt-3">
                    <div class="col-2 ">
<!--                        href="{{route('shop.show',$item->model->slug)}}"-->
                        <a >
<!--                            {{productImage($item->model->image)}}-->
                            <img
                            src="" class="img-fluid"
                            alt=""></a>
                    </div>
                    <div class="col-4">
<!--                        {{route('shop.show',$item->model->slug)}}-->
                        <a href="">
<!--                            {{$item->name}}-->
                        </a>
                        <p>
<!--                            {{$item->model->details}}-->
                        </p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-1">
<!--                        {{$item->rowId}}-->
<!--                        {{$item->qty}}-->
                        <input class="quantity" data-id="" type="number"
                               style="width: 50px"
                               value="">
                    </div>
<!--                    {{$item->model->presetPrice}}-->
                    <div class="col-2"></div>
                    <div class="col-2 text-right">
<!--                        {{route('shop.cart.remove',$item->rowId)}}-->
<!--                        <form action="" method="post">-->
<!--                            @csrf-->
<!--                            @method('DELETE')-->
                            <a href='#' class="text-danger"
                               onclick='this.parentNode.submit(); return false;'>Remove</a>
<!--                        </form>-->
<!--                        {{route('shop.saved.switchToSaved',$item->rowId)}}-->


                            <a href='#' class="text-info"
                               onclick='this.parentNode.submit(); return false;'>save for later</a>

                    </div>
                    <div class="col-12 mt-2" style="height: 2px; background-color: #1a202c2f"></div>

                </div>

            </div>
<!--            @endforeach-->
<!--            @if(!\Cart::instance('default')->content()->isEmpty())-->
            <div class="col-12 text-right mt-5">
<!--                <form action="{{route('shop.cart.empty')}}" method="post">-->
<!--                    @method('DELETE')-->
<!--                    @csrf-->
                    <button type="submit" class="btn btn-outline-danger">Clear shopping cast</button>
<!--                </form>-->
            </div>
<!--            @endif-->

<!--            must bind coupon and bills-->
            <invoice  ></invoice>
<!--            @if(!\Cart::instance('default')->content()->isEmpty())-->
            <div class="col-12">
                <div class="d-flex justify-content-between">
<!--                    {{route('shop.index')}}-->
                    <a href="" class="btn btn-outline-dark">Continue
                        shopping</a>
<!--                    {{route('shop.checkout')}}-->
                    <a href="" class="btn btn-success">
                        Checkout
                    </a>
                </div>
            </div>
<!--            @endif-->
<!--            @if(\Cart::instance('save')->content()->isEmpty())-->
            <div class="col-12 my-5"> There is no item saved for later</div>
<!--            @endif-->
<!--            @foreach(\Cart::instance('save')->content() as $item)-->
            <div class="col-12">
                <div class="row mt-3">
                    <h5 class="col-12 py-3"><span class="text-danger">Saved items</span> in your cart...
                    </h5>

                    <div class="col-12 mb-1" style="height: 2px; background-color: #1a202c2f"></div>
                    <div class="col-2 ">
<!--                        {{route('shop.show',$item->model->slug)}}-->
                        <a href="">
                            <!--                            {{productImage($item->model->image)}}-->

                            <img
                            src="" class="img-fluid"
                            alt=""></a>
                    </div>
                    <div class="col-4">
<!--                        {{route('shop.show',$item->model->slug)}}-->
                        <a href="">
<!--                            {{$item->name}}-->
                        </a>
                        <p>
<!--                            {{$item->model->details}}-->
                        </p>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
<!--                        {{$item->model->presetPrice}}-->
                    </div>
                    <div class="col-3 text-right">
<!--                        {{route('shop.saved.remove',$item->rowId)}}-->
                            <a href='#' class="text-danger"
                               onclick='this.parentNode.submit(); return false;'>Remove</a>
<!--                        {{route('shop.saved.switchToCart',$item->rowId)}}-->


                            <a href='#' class="text-info"
                               onclick='this.parentNode.submit(); return false;'>Move to cast</a>

                    </div>

                    <div class="col-12 mt-2" style="height: 2px; background-color: #1a202c2f"></div>

                </div>

            </div>

            <div class="col-12 mt-2 text-right mb-5">
<!--                {{route('shop.cart.empty')}}-->
                    <button type="submit" class="btn btn-outline-danger">Clear saved items</button>
            </div>
        </div>
    </div>

</template>

<script>
import axios from "axios";
import invoice from './Invoice.vue';
export default {
    component(id) {
    }
}
</script>
