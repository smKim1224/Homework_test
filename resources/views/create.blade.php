<center>
<h1>CREATE</h1>
<form method="POST" action="/">
    @csrf
    <label for="name">NAME :</label>
    <input type="text" id="name" name="name" placeholder="이름"><br><br>

    <textarea name="title" id="title" placeholder="제목" cols="70" rows="1"></textarea><br><br>   
    
    <textarea name="contents" id="contents" placeholder="내용" cols="70" rows="10"></textarea><br><br>

    <input type="submit" value="글올리기">  
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
</center>
