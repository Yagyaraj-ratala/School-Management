
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>Student List</h1>
<table>
  <tr>
    <th>S.N</th>
    <th>First Name</th>
    <th>Roll</th>
    <th>Section</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
  </tr>
  <?php   $c=1;?>
  @foreach($studentdata as $s)
  <tr>
    <td>{{$c++}}</td>
    <td>{{$s->fname}}</td>
    <td>{{$s->roll}}</td>
    <td>{{$s->section}}</td>
    <td>{{$s->email}}</td>
    <td>{{$s->phone}}</td>
    <td><a href="{{'create/'}}" style="color: red;">Create | </a>
    <td><a href="{{'update/'.$s->id}}" style="color: red;">Update | </a>
    <td><a href="{{'delete/'.$s->id}}" style="color: red;">Delete </a>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>

