@extends('layout.index')
@section('content')


<style type="text/css">
.fragment {
    font-size: 12px;
    font-family: tahoma;
    height: 140px;
    border: 1px solid #ccc;
    color: #555;
    display: block;
    padding: 10px;
    box-sizing: border-box;
    text-decoration: none;
}

.fragment:hover {
    box-shadow: 2px 2px 5px rgba(0,0,0,.2);

}

.fragment img { 
    float: left;
    margin-right: 10px;
}


.fragment h3 {
    padding: 0;
    margin: 0;
    color: #369;
}
.fragment h4 {
    padding: 0;
    margin: 0;
    color: #000;
}
#close {
    float:right;
    display:inline-block;
    padding:2px 5px;
    background:#ccc;
}
}
</style>

<div>hihihi
<a class="fragment" href="google.com">
    <div>
        <span id='close' >x</span>
    <img src ="http://placehold.it/116x116" alt="some description"/> 
    <h3>the title will go here</h3>
        <h4> www.myurlwill.com </h4>
    <p class="text">
        this is a short description yada yada peanuts etc this is a short description yada yada peanuts etc this is a short description yada yada peanuts etc this is a short description yada yada peanuts etcthis is a short description yada yada peanuts etc 
    </p>
</div>
</a>
</div>
<script type="text/javascript">
window.onload = function(){
    document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};
</script>

@endsection