@foreach($datas as $data)
    @if ($loop->first)
        <option value="{{$data->id}}" selected>{{$data->name}}</option>
    @else
        <option value="{{$data->id}}">{{$data->name}}</option>
    @endif
@endforeach
