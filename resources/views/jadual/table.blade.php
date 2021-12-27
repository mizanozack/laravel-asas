@extends('layout.header')

<div class="container">
    <h1> <p class="fs-4"> Chart <span class="badge bg-secondary">New</span></h1>
    <h2> Listing </h2>
    <hr/>

<a href="http://google.com" class="btn btn-success">Click Here</a>

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
            <th scope="col">Last</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listItems as $key=>$listItem)
            <tr>
            <th scope="row">{{ $key+1 }} </th>
            <td> {{ $listItem->name }}</td>
            <td> {{ $listItem->updated_at }}</td>
            <td></td>
            
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
            
            <tr>
            <th scope="row">2</th>
            <td>updated_at</td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>john</td>
            <td>@twitter</td>
            </tr>
        
        </tbody>
    </table>
                </div>
        </div>
    </div>

    

</div>

</body>

</html>
