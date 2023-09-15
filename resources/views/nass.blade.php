
<h1>Marushwa</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>email</td>
        <td>profile</td>
    </tr>
   @foreach ($items as $item)
   <tr>
    <td>{{$item['id'] }}</td>
    <td>{{$item['first_name']}}</td>
    <td>{{$item['last_name']}}</td>
    <td>{{$item['email']}}</td>
    </tr>
   @endforeach
</table>