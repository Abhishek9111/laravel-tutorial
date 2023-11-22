<h1>Laravel tutorial</h1>

<h2>{{ $name}}</h2>
<h2>{{ $id}}</h2>


   {{-- {{$demo}} --}}
    {{-- the format underneath render provided css --}}
    {{-- {!!$demo!!}  --}}
    {{-- @if($name=="")
    {{"Name is not empty"}}
    @elseif($name=='Abhishek')
    {{'lol'}}
    @else 
    {{"Name is empty"}}
    @endif --}}
{{-- 
    @unless($name=='test')
{{'none'}}
    @endunless --}}

    {{-- @isset($name)
        {{$name}}
    @endisset --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        {{'test'}}
    @endfor --}}

    {{-- initializing i --}}
    {{-- <?php --}}
    // $i =1;
    // ?>
 
    {{-- @while ($i)
     <?php $i++?>
    @endwhile --}}
    {{-- @php
      $i=1   
    @endphp
    @while ()
      @php
       $i++    
      @endphp  
    @endwhile --}}

    {{-- @php
        $numbers=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]
    @endphp

    <select>
        @foreach ($numbers as $key=>$item)
            <option value="{{$item}}">{{$item}}</option>
        @endforeach
    </select> --}}

    