@include('components/header')
<div class="container">
    <div class="row py-5">
        @if($h1)
            <h1 class="mb-3">{{urldecode($h1)}}</h1>
        @endif
        @if($type == 'iframe')
            <iframe src="{{asset('assets/'.urldecode($data))}}" width="100%" height="780"></iframe>
        @elseif($type == 'table-tile')
            <table class="table table-striped">
                <?php $data = json_decode($data ?? ''); ?>
                @foreach($data as $key => $item)
                    @if(!is_numeric($key))
                        <tr>
                            <th colspan="3"><h4 class="m-0 p-0">{{$key}}</h4></th>
                        </tr>
                    @endif
                    @foreach($item as $i => $value)
                        <tr>
                            <td>{{$i +1}}.</td>
                            <td>{{$value->title ?? 'Title'}}</td>
                            <td><a target="__blank" href="{{$value->detail_url ?? '#'}}">View</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        @endif
    </div>
</div>
@include('components/footer')
