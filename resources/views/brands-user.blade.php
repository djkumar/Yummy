@extends('layouts.app')
@section('content')
<div class="page-uif">
<div class="section boxed-section light">
            <div class="inner">
                <div class="container"
               
                   <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style type="text/css">
a.previous { display: none; }
.demo { width:960px; margin:50px auto;}

body{font-family: 'Poppins', sans-serif; color: #646e7b; letter-spacing: .7px;font-weight: 400;  line-height: 28px; }
a{color:#11b9c4;}
table tr { display: none; }

h3 {
  font-family: 'Quicksand', sans-serif;
  font-weight: 400;
  font-size: 26px;
  line-height: 30px;
  color: #002226;
  letter-spacing: 1.3px;
}

table tr:nth-child(-n+0) { display: table-row; }

</style>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">  
				
				<div class="section light">  
	<div class="inner">
		  <div class="container site-tabsection">
			  <ul class="nav nav-tabs" role="tablist">
			      @forelse($category as $categor)
			       <li role="presentation"><a href="#" aria-controls="" role="tab" data-toggle="tab" onclick="redirect(this);"> {{ $categor->category_name }} </a></li>
			      @empty
			      @endforelse

 </ul>

       <div class="tab-content">
            
             <div role="tabpanel" class="tab-pane active" id="">
        <div class="row">
  			<div class="col-md-12">
        <div class="directory-single-info">
            <div class="homecategoryblock1">
                 <div class="col-xs-3">
               <a href="" class="category-box" style=""><div class="rating">Discovery Medics</div>
                  <div class="inner">               
                    <img src="" alt="icon">
                    <span class="number"><img src="" alt="icon"></span>                 
                    <span class="location"></span>
                    <span class="title"></span>
                    <!--<span class="chat"><span title="Available For Chat"><img src="" alt="Chat"> Chat Now</span></span>-->
                  </div> <!-- end .inner -->
                </a> <!-- end .category-box -->
              </div> <!-- end .col-md-3 -->
              </div>
              </div>
        </div>

      </div> <!-- end .container -->
  </div> <!-- end .inner -->
  
 
</div> <!-- end .section -->
<script type="text/javascript">
  
  function redirect(obj)
  {
     window.location = obj.href;
  }

</script>
				
					</div>
					
</div>      
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
            
            
        </div>
           </div> <!-- end .container -->
        </div>
        </div>
@endsection
