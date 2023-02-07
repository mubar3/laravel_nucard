
<style>
    body{
        color: black;
        font-size:20px ;
        font-weight: bold;
        font-family: Arial;font-size: 12px;
    }
    table{
        color: black;
        font-size:20px ;
        font-weight: bold;
        font-family: Arial;font-size: 12px;
    }
</style>
<body style="
 padding-left: 100px;  padding-top: 30px;padding-bottom: -40px;">
@php
    $i=1;
@endphp
@foreach($data as $rr)
<div style=" float: left;  padding-left: 30px; width: 550px;height: 350px; border-left: 2px dashed red;">
<div style=" margin-left: 0px;  float: left;  margin-right: 30px; margin-top:-4px;width: 550px;height: 350px;margin-bottom: 6px;background-size: 550px 350px;
    background-image: url({{ asset('desain/'.$rr->folder.'/depan.png') }});
    ">

           

            </div>
        </div>
        
        
        
<div style="float: left; 
    margin-right: 30px;  margin-left: 30px;
     margin-top:-4px;width: 550px;height: 350px;margin-bottom: 6px;background-size: 550px 350px;
     background-image: url({{ asset('desain/'.$rr->folder.'/belakang.png') }});/
     ">
        <div style="border: 0px solid white; border-radius: 5px; position: absolute;margin-left: <?php echo $rr->kiri; ?>px;margin-top: <?php echo $rr->atas; ?>px; overflow: hidden;" class="img-responsive img" >
            {!! QrCode::size($rr->size)->generate($rr->url) !!}
        </div>

                

           

            </div>
    {{-- @if ($rr->id == 19)
        @break  
    @endif --}}
    {{ $i }}
    @if ($i % 10 == 0)
    <div style="page-break-before: always; padding-top:30px"></div>
    @endif
    @php
        $i++;
    @endphp
@endforeach
</body>