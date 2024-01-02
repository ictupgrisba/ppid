@include('components/header')
<div class="container">
    <div class="row py-5">
        @if($h1)
            <h1 class="mb-3">{{ucfirst(urldecode($h1))}}</h1>
        @endif
        @if($type == 'iframe')
            <iframe src="{{$data}}" width="100%" height="780"></iframe>
        @elseif($type == 'row-card')
            <div class="row row-cols-3">
                @foreach(json_decode($data ?? '') as $i => $card)
                    <div class="team-item wow fadeIn" data-wow-delay=".{{$i +2}}s">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{$card->cover_url}}" class="img-fluid w-100 rounded-circle" alt="{{$card->title}}">
                                </div>
                                <div class="team-name text-center py-3 mb-4">
                                    <a href="{{$card->detail_url . '?data=' . urlencode($card->detail_data)}}">{{$card->title}}</a>
                                    <p class="m-0">Formulir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif($type == 'table-tile')
            <table class="table table-striped">
                @foreach(json_decode($data ?? '') as $key => $table)
                    @if(!is_numeric($key))
                        <tr>
                            <th colspan="3"><h4 class="m-0 p-0">{{$key}}</h4></th>
                        </tr>
                    @endif
                    @foreach($table as $i => $row)
                        <tr>
                            <td>{{$i +1}}.</td>
                            <td>{{$row->title ?? 'Title'}}</td>
                            <td>
                                @if(is_string($row->detail_url))
                                    <a target="__blank" href="{{$row->detail_url}}">View</a>
                                @else
                                    @foreach(json_decode($row->detail_url) as $text => $url)
                                        <div class="py-1"><a target="__blank" href="{{$url ?? '#'}}">{{$text}}</a></div>
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        @elseif($type == 'text-list')
            @foreach(json_decode($data ?? '') as $i => $card)
                <div class="team-item wow fadeIn" data-wow-delay=".{{$i +2}}s">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="{{$card->cover_url}}" class="img-fluid w-100 rounded-circle" alt="{{$card->title}}">
                            </div>
                            <div class="team-name text-center py-3 mb-4">
                                <a href="{{$card->detail_url . '?data=' . urlencode($card->detail_data)}}">{{$card->title}}</a>
                                <p class="m-0">Formulir</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @elseif($type == 'article')
            <div class="col-md-12">
                <div class="mb-4">
                    <span><i class="fa fa-solid fa-calendar"></i> <span>{{date('M d, Y')}}</span></span>
                    <span class="mx-2"><i class="fa fa-solid fa-user"></i> <span>PPID</span></span>
                    <span class="mx-2"><i class="fa fa-solid fa-folder"></i> <span>Artikel</span></span>
                    <span><i class="fa fa-solid fa-comment"></i> <span>0 Komentar</span></span>
                </div>
                {!! $data !!}
            </div>
        @endif
    </div>
</div>
@include('components/footer')
