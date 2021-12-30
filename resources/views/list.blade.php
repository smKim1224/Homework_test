<center>
<h1>LIST</h1>
    <table border="1" width = '700'>
    <tr>
    	<th>ID</th>
    	<th>TITLE</th>
    	<th>NAME</th>
    	<th>DATE</th>
    </tr>
    
    @foreach($posts as $post)
    <tr>
    	<td align="center">
    	{{ $post->id }}
    	</td>
    	<td align="center" width = '300'>
            <a href="/show/{{ $post->id }}"> {{ $post->title }}</a>
        </td>
        <td align="center">
        {{ $post->name }}
        </td>
        <td align="center">
    	{{ $post->created_at }}
        </td>
    </tr>
    @endforeach
    </table>

    {{--Paginate--}}
    {!! $posts->render() !!}
<br>
	<form action="/create" method="GET">
        <button type="submit">새글쓰기</button>
    </form>
</center>