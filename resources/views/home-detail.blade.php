<?php $data = json_decode($data ?? ''); ?>
@include('components/header')
<div class="container">
    <div class="row py-5">
        @if($h1)
            <h1 class="mb-3">{{urldecode($h1)}}</h1>
        @endif
        @if($type == 'iframe')
            <iframe src="{{$data}}" width="100%" height="780"></iframe>
        @elseif($type == 'row-card')
            <div class="row row-cols-3">
                @foreach($data as $i => $card)
                    <div class="team-item wow fadeIn" data-wow-delay=".{{$i +2}}s">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{$card->cover_url}}" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3 mb-4">
                                    <a href="{{$card->embed_url}}"></a>
                                    <p class="m-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif($type == 'table-tile')
            <table class="table table-striped">
                @foreach($data as $key => $table)
                    @if(!is_numeric($key))
                        <tr>
                            <th colspan="3"><h4 class="m-0 p-0">{{$key}}</h4></th>
                        </tr>
                    @endif
                    @foreach($table as $i => $row)
                        <tr>
                            <td>{{$i +1}}.</td>
                            <td>{{$row->title ?? 'Title'}}</td>
                            <td><a target="__blank" href="{{$row->detail_url ?? '#'}}">View</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        @endif
    </div>
</div>
@include('components/footer')
