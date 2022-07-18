<div>
    <div class="container">

        <div class="row margin-up justify-content-center text-center">
            <div class="col-7 col-md-3 revisor-card revisor-count py-3 my-3 mx-auto">
                <div class="card-body">
                    <h5 class="card-title">{{__('ui.anre')}}:</h5>
                    <p class="card-text fs-1 fw-bold">{{App\Models\Ad::toBeRevisionedCount()}}</p>
                </div>
            </div>
            <div class="col-7 col-md-3 offset-md-1 revisor-card revisor-count py-3 my-3 mx-auto">
                <div class="card-body">
                    <h5 class="card-title">{{__('ui.accet')}}:</h5>
                    <p class="card-text fs-1 fw-bold text-success">{{App\Models\Ad::AcceptedByRevisorCount(Auth::user()->id)}}</p>
                </div>
            </div>
            <div class="col-7 col-md-3 offset-md-1 revisor-card revisor-count py-3 my-3 mx-auto">
                <div class="card-body">
                    <h5 class="card-title">{{__('ui.rif')}}:</h5>
                    <p class="card-text fs-1 fw-bold text-danger">{{App\Models\Ad::notAcceptedByRevisorCount(Auth::user()->id)}}</p>
                </div>
            </div>

        {{-- tabella da revisionare --}}
        <div class="row my-4">
            <div class="col-11 col-md-10 mx-auto table-responsive revisor-card my-5 py-3">
                <div class="card-body">
                    <table class="table margin-up">
                        @if (App\Models\Ad::toBeRevisionedCount()>0)
                        <h2 class="text-center">{{__('ui.anre')}}</h2>
                        <thead>
                            <tr>
                                {{-- <th scope="col">icona</th> --}}
                                <th scope="col" class="w-title">{{__('ui.tit')}}</th>
                                <th scope="col" class="w-user">{{__('ui.user')}}</th>
                                <th scope="col" class="w-date">{{__('ui.data')}}</th>
                            </tr>
                        </thead>
                        @endif
                        @forelse ($ads_to_revise as $ad)
                        <tbody wire:key="{{ $loop->index }}">
                            <tr>
                                <td>
                                    <a href="{{route('revisorDetailAd',compact('ad'))}}">{{$ad->title}}</a>
                                </td>
                                <td>
                                    <p>{{$ad->user->name}}</p>
                                </td>
                                <td>
                                    <p>{{$ad->created_at}}</p>
                                </td>
                            </tr>
                            <tr>
                                @empty
                                <div class="col-11 col-md-10 mx-auto mt-3 text-center">
                                    <h2 class="text-center">{{__('ui.nhadr')}}</h2>
                                </div>
                                @endforelse
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- tabella annunci rifiutati --}}
        <div class="row my-4">
            <div class="col-11 col-md-10 mx-auto table-responsive revisor-card py-3 my-5">
                <div class="card-body">

                    <table class="table margin-up">
                        <h2 class="text-center">{{__('ui.rif')}}</h2>
                        <thead>
                            <tr>
                                {{-- <th scope="col">icona</th> --}}
                                <th scope="col" class="w-title">{{__('ui.tit')}}</th>
                                <th scope="col" class="w-user">{{__('ui.user')}}</th>
                                <th scope="col" class="w-date">{{__('ui.data')}}</th>
                                <th scope="col" class="w-botton"></th>
                            </tr>
                        </thead>
                        @forelse($ads_rejected as $ad)
                        <tbody wire:key="{{ $loop->index }}">
                            <tr>
                                <td>
                                    <p>{{$ad->title}}</p>
                                </td>
                                <td>
                                    <p>{{$ad->user->name}}</p>
                                </td>
                                <td>
                                    <p>{{$ad->created_at}}</p>
                                </td>
                                <td>
                                    <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning btn-web">{{__('ui.nono')}}</button>
                                    <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning btn-mobile"><i class="fa-solid fa-backward"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3"></td>
                                <td></td>
                            @endforelse
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {{-- tabella annunci accettati --}}
        <div class="row my-4 ">
            <div class="col-11 col-md-10 mx-auto table-responsive revisor-card py-3 my-5 m-bottom">
                <div class="card-body">
                    <table class="table margin-up">
                        <h2 class="text-center">{{__('ui.accet')}}</h2>
                        <thead>
                            <tr>
                                {{-- <th scope="col">icona</th> --}}
                                <th scope="col" class="w-title">{{__('ui.tit')}}</th>
                                <th scope="col" class="w-user">{{__('ui.user')}}</th>
                                <th scope="col" class="w-date">{{__('ui.data')}}</th>
                                <th scope="col" class="w-botton"></th>
                            </tr>
                        </thead>
                        @forelse($ads_accepted as $ad)
                        <tbody wire:key="{{ $loop->index }}">
                            <tr>
                                <td>
                                    <p>{{$ad->title}}</p>
                                </td>
                                <td>
                                    <p>{{$ad->user->name}}</p>
                                </td>
                                <td>
                                    <p>{{$ad->created_at}}</p>
                                </td>
                                <td>
                                    <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning btn-web">{{__('ui.nono')}}</button>
                                    <button wire:click.prevent="setToRevise({{$ad}})" class="btn btn-warning btn-mobile"><i class="fa-solid fa-backward"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3"></td>
                                <td></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
