@extends('layout.header')

<body style="background-color:;"class="bg-success p-2 text-dark bg-opacity-10">


<div class="container">
    <h1> <p class="fs-4"> Chart <span class="badge bg-secondary">New</span></h1>
    <h2> Listing </h2>
    <hr/>


<a href="/" class="btn btn-success">Go to Front Page</a>

    <ul class="list-group">
        <li class="list-group-item">item 1</li>
        <li class="list-group-item">item 2</li>    
    </ul>
    @foreach($sample as $k=>$s)

    {{ $s }} - {{ $k }}
    @endforeach

    {{ $listItems->count() }}

    <div class="container">
        <div class="row">
                <div class="col-4">
                Column lkkkkkk
                </div>
                <div class="col-8">
                <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
            <th scope="col">NO</th>
            <th scope="col">Name</th>
            <th scope="col">updated_at</th>
            <th scope="col">is_complete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listItems as $key=>$listItem)
            <tr>
            <th scope="row">{{ $key+1 }} </th>
            <td> {{ $listItem->name }}</td>
            <td> {{ $listItem->updated_at }}</td>
            
            <td>
            <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charser="UTF-8">
                {{ csrf_field() }} {{ $listItem->is_complete }} 
                @if($listItem->is_complete == '1')
                </form>

                <form action="{{url('jadual/'.$listItem->id) }}" method="post" class="d-inline"onsubmit="return confirm('delete data?')">
                     @method('delete') 
                     @csrf
                     <button type="submit" class="btn btn-danger">Delete</button>
                    

                <script>
           
    });
        </script>
                @else
                <button type="submit" class="btn btn-primary">Mark Complete</button>
                @endif
            </form>
            </td>
            
            </tr>
            @endforeach

            

            @foreach ($demo as $key=>$r)
            <tr>
            <th scope="row">{{ $key+1+$listItems->count() }}</th>
            <td>  {{ $r->name }}</td>
            <td></td>
            <td></td>
            
            </tr>
            @endforeach
            

           
            <
        
        </tbody>
    </table>
                </div>
        </div>
    </div>

    

</div>

</body>

</html>
