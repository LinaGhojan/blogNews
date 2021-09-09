
<head>

<link rel="stylesheet" href="{{asset('/master.css')}}">
<link rel="stylesheet" href="{{asset('/bootstrap.css')}}">


</head>
<body>
<div class="load">
            <div class="one"> </div>
            <div class="tow"></div>
            <div class="three"></div>
        </div>
        <div class="create-menu ">
        <a href="blog/create" class="btn-create">create Blog News</a>
        </div>
        <table>
            
            <thead>

                <tr>
                    <td>id</td>
                    <td>blogs</td>
                    <td>SAVE</td>
                    <td>Delete</td>
                 

                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <p  class="" >{{$i=0}}</p>
                <tr>
                   
                    <td>{{$blog->id}}</td>
                    <td>
                        @for($i;$i<strlen($blog->text);$i++)
                        
                        {{$blog->text[$i]}}
                        @if($i==50)
                        <br>
                        @endif
                        @endfor
                    </td>
                    <td>
                        @if($blog->save==0)
                        <a href="blog/{{$blog->id }}/save" class="btn-edit">save</a>
                        @endif
                    </td>
                    <td><form action="blog/{{$blog->id }}" method='POST'>
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"  class='btn-delete' value='Delete'>
                                        </form></td>

                 

                </tr>
                
                @endforeach
           
            </tbody>
        </table>

    </div>


    <script src="{{asset('/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('/form.js')}}"></script>

</body>

    
