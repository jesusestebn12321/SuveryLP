<tbody id='tbodyUse' class='d-none'>
@foreach($email as $emails)
@if($emails->status_id==8)
<tr>
  <td>{{$emails->id}}</td>
  <td>{{$emails->name}}</td>
  <td>{{$emails->lastname}}</td>
  <td>{{$emails->email}}</td>
  <td>{{$emails->password}}</td>
  <td>{{$emails->brith}}</td>
  <td>{{$emails->gender->gender}}</td>
  <td>{{$emails->statu->statu}}</td>
  <td>
    @if($emails->status_id==8)
    <a  href="{{route('Email.rechazada',$emails->slug)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
    @else
    <a  href="{{route('Email.rechazada',$emails->slug)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
    <a  href="{{route('Email.uso',$emails->slug)}}" class='btn btn-danger'> <i class="ni ni-briefcase-24 text-white"></i></a>
    @endif
    <a  href="#!" class='btn btn-primary'><i class='fa fa-edit'></i></a>
  </td>
</tr>
@endif
@endforeach
<tbody>