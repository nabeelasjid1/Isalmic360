@extends('layouts.adminpanellayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3>List of All Hadiths References</h3>
        </div>
        <div class="col-sm-2">
            <a href="{{route('HadithRef.create')}}" class="btn btn-sm btn-success">Create New HadithRef</a>
        </div>
        @if($message = Session::get('seccess'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
        <table class="table table-hover table-sm">
            <tr>
                <th width="50px"> No.</th>
                <th width="180px"> Bab</th>
                <th width="180px"> Hadith No</th>
                <th width="180px"> Vloume</th>
                <th width="180px"> Book</th>
                <th width="180px"> Sahih or Not</th>
                <th width="180px"> Sahih Reference Book Name</th>
                <th width="180px"> Takhreej</th>
                <th width="180px"> Action</th>
            </tr>
            @foreach($references as $reference)
            <tr>
                <td><b>{{++$i}}</b></td>
                <td>{{$reference->Bab}}</td>
                <td>{{$reference->Hadith_No}}</td>
                <td>{{$reference->Volume}}</td>
                <td>{{$reference->Book}}</td>
                <td>{{$reference->Sahih_or_Not}}</td>
                <td>{{$reference->Sahih_Reference_Book_Name}}</td>
                <td>{{$reference->Takhreej}}</td>
                <td>
                <form action="{{route('HadithRef.destroy', $reference->id)}}" method="post">
                    <a class="btn btn-sm btn-success" href="{{route('HadithRef.show',$reference->id)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{route('HadithRef.edit',$reference->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn-sm btn-danger" type="submit">Delete</button>               
                </form>
                </td>
            </tr>

            @endforeach
        
        </table>
    </div>
    {!! $references->links() !!}
</div>
@endsection
