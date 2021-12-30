<!DOCTYPE html>
<html>
<head>
    <title></title>
<center>
<h1>Contents</h1>
<table border="1" width="700">
    <tr>
    	<th align="center" width="350">작성자:{{ $post->name }}</th>
        <td align="center">작성날짜:{{ $post->created_at }}</td>
    </tr>
    <tr>
        <th colspan="2" align="center">제목: {{ $post->title }}</th>
    <tr> 
        <td colspan="2" align="center">{{ $post->contents }}</td>
    </tr>
</table>
<br>
<form action="/" method="GET">
    <button type="submit">To List</button>
</form>
</center>
