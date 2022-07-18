<div class="row">
    {{-- Left Col --}}
    <div class="form-box col-12 col-md-6 col-lg-5 col-xl-4 ms-auto mb-5">
        <div class="w-100">
            <div>
                {{-- Alert --}}
                @if (session('message'))
                    <div class="alert alert-success">
                        <small>{{session('message')}}</small>
                    </div>
                @endif
                @if (session('alert'))
                    <div class="alert alert-danger">
                        <small>{{session('alert')}}</small>
                    </div>
                @endif
                <form wire:submit.prevent="submitAd">
                    @csrf
                    {{-- Input Title --}}
                    <h6 class="input-title">{{__('ui.titad')}}</h6>
                    <div class="form-floating mb-4">
                        <input wire:change="restartCarousel" type="text" class="form-control" id="floatingInput" placeholder=" " wire:model="title">
                        <label for="floatingInput">{{__('ui.tit')}}</label>
                        @error('title') <span class="error text-danger">{{$message}}</span> @enderror
                    </div>
                    {{-- Input Details --}}
                    <h6 class="input-title">{{__('ui.det')}}</h6>
                    <div class="form-floating mb-4">
                        <input wire:change="restartCarousel" type="text" class="form-control" id="floatingDescription" placeholder=" " wire:model="description">
                        <label for="floatingDescription">{{__('ui.desc')}}</label>
                        <small class="text-primary ps-1 d-block">* {{__('ui.descg')}}</small>
                        @error('description') <span class="error text-danger">{{$message}}</span> @enderror
                    </div>
                    {{-- Input Category --}}
                    <h6 class="input-title">{{__('ui.cate')}}</h6>
                    <div class="form-floating mb-4">
                        <select wire:change="restartCarousel" class="form-select" id="floatingCategories" wire:model.defer="category">
                            <option hidden selected value="{{$category = ""}}">{{__('ui.selcate')}}</option>
                            @foreach ($categories as $category)
                                @switch(Lang::locale())
                                    @case("en")
                                        <option value="{{$category->id}}">{{$category->category_en}}</option>
                                    @break

                                    @case("es")
                                        <option value="{{$category->id}}">{{$category->category_es}}</option>
                                    @break

                                    @case("fr")
                                        <option value="{{$category->id}}">{{$category->category_fr}}</option>
                                    @break

                                    @case("pt")
                                        <option value="{{$category->id}}">{{$category->category_pt}}</option>
                                    @break
                                    @case("ke")
                                        <option value="{{$category->id}}">{{$category->category_ke}}</option>
                                    @break

                                    @default
                                        <option value="{{$category->id}}">{{$category->category_it}}</option>
                                    @break
                                @endswitch
                            @endforeach
                        </select>
                        <label for="floatingCategories">{{__('ui.cate')}}</label>
                        @error('category') <span class="error text-danger">{{$message}}</span> @enderror
                    </div>
                    {{-- Input Image --}}
                    <h6 class="input-title">{{__('ui.insim')}}</h6>
                    <div class="mb-4">
                        <input wire:change="restartCarousel" wire:model="temporary_images" name="images" multiple class="form-control form-control-lg @error('temporary_images.*') is-invalid @enderror" id="formFile" type="file">
                        @error('temporary_images.*')
                            <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- Input Price --}}
                    <h6 class="input-title">{{__('ui.pri')}}</h6>
                    <div class="form-floating mb-4">
                        <input wire:change="restartCarousel" type="text" class="form-control" id="floatingPrice" placeholder=" " wire:model="price">
                        <label for="floatingPrice">{{__('ui.pri')}}</label>
                        @error('price') <span class="error text-danger">{{$message}}</span> @enderror
                    </div>
                    {{-- Submit Form Button --}}
                    <div>
                        <button class="form-btn" type="submit">{{__('ui.titlenew')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Right Col --}}
    <div class="col-12 col-md-6 col-lg-5 col-xl-4 m-auto mt-5 mt-md-auto">

        {{-- Card --}}
        <div class="card adCard1 rounded-0 m-auto">

            @if(empty($images))
                {{-- Place Holder Images Card Swiper --}}
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                    </div>
                </div>
            @else
                {{-- User Images Card Swiper --}}
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach($images as $key=> $image)
                        <div class="swiper-slide">
                            <img class="h-100" style="height:300px !important; width:300px !important;" src="{{$image->temporaryUrl()}}" style="    background: linear-gradient(180deg, rgba(0, 0, 0, 0.2) 4.63%, rgba(0, 0, 0, 0) 100%);"/>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
            {{-- Card Details --}}
            @if(!$this->category)
                <span class="adCard-cat z-index-upper">Sport</span>
            @else
                @switch(Lang::locale())
                    @case("en")
                        <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category_en}}</span>
                    @break

                    @case("es")
                        <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category_es}}</span>
                    @break

                    @case("fr")
                        <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category_fr}}</span>
                    @break
                    @case("pt")
                        <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category_pt}}</span>
                    @break
                    @case("ke")
                        <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category_ke}}</span>
                    @break

                    @default
                        <span class="adCard-cat z-index-upper">{{App\Models\Category::find($this->category)->category_it}}</span>
                    @break
                @endswitch
            @endif

            <div class="card-item d-flex justify-content-between" style="height: 27px;">
                {{-- Ad Title --}}
                @if (!$this->title)
                    <small class="adCard-title">{{__('ui.tit')}}</small>
                @else
                    <small class="adCard-title">{{$title}}</small>
                @endif
                
                {{-- Ad Price --}}
                @if (!$this->price)
                    <small class="adCard-price text-end">0€</small>
                @else
                    <small class="adCard-price text-end">{{$price}}€</small>
                @endif
            </div>

            {{-- Ad Author --}}
            <div class="card-item text-start" style="height: 38px; padding-top: 6px;">
                <small class="adCard-author">{{Auth::user()->name}}</small>                        
            </div>

        </div>

        @if(empty($images))
            {{-- Place Holder Images Swiper --}}
            <div thumbsSlider="" class="swiper mySwiper mt-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                    </div>
                </div>
            </div>
        @else
            {{-- User Images Swiper --}}
            <div thumbsSlider="" class="swiper mySwiper mt-3">
                <div class="swiper-wrapper">
                    @foreach($images as $key => $image)
                    <div class="swiper-slide d-flex flex-column" style="height: 145px !important; width:82px !important; ">
                        <img class="img-fluid mb-2" style="max-height:82px !important; max-width:82px !important;" src="{{$image->temporaryUrl()}}" />
                        <button wire:click="removeImage({{$key}})" type="button" class="btn-reject rounded-circle bg-white ml-5 mb-2"><i class="fa-regular fa-trash-can"></i></button>
                    </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div> {{-- End Right Col --}}
</div>