<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>

<body>

<style>
  body {
    font-family: 'Roboto Condensed', sans-serif;
  }


  </style>

<h1> <p class="fs-4"> Chart <span class="badge bg-secondary">New</span></h1>
<h2> Listing </h2>
<hr/>

<a href="http://google.com">Click Here</a>

<ul>
      <li>item 1</li>
      <li>item 2</li>
      
</ul>
    
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
    @foreach ($listItems as $listItem)
    <tr>
      <th scope="row">1</th>
      <td>  {{ $listItem->name }}</td>
      <td></td>
      <td></td>
      
    </tr>
    @endforeach
    
    <tr>
      <th scope="row">2</th>
      <td>updated_at></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>john</td>
      <td>@twitter</td>
    </tr>
   
  </tbody>
</table>



</body>

</html>
