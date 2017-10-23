 <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style type='text/css'>

.demo { width:100%; margin:50px auto;}
span {
  display: none;
  color: Red;
}
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

table tr:nth-child(-n+5) { display: table-row; }
</style>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> 


<div class="text-left add-pro-btn"><a href="javascript:void(0);" class="button" id="upgradebtn">Upgrade</a></div>

<div class="text-right add-pro-btn" style="margin-top: -49px;"><a href="{{ url('my-listings/add') }}" class="button">Add Listings</a></div>
<div class="demo"> 

<table class="pretty table table-bordered table-striped" style=""> 
<thead>
            <tr>
                <th width="10%"></th>
                <th width="10%">Listing Name</th>
                <!-- <th width="10%">Listing Tag</th> -->
                <th width="10%">Listing City</th>
                <th width="12%">Category</th>
                <th width="18%">Status</th>
                <th width="10%">Expiry Date</th>
                <th width="10%">Upgrade</th>
                <th width="10%">Edit</th>
            </tr>
        <div></div></thead>
        
  <tbody>
     
            
                                               @forelse($listings as $listing)
                                                <tr> 
                                                <td> <input name="list_id" id="list_id{{ $listing->id }}" value=" {{ $listing->id }} " type="checkbox"> </td>
                                                    <td>{{ $listing->listing_name }}</td>
                                                    <td>{{ $listing->city }}</td>
                                                    <td>{{ $listing->listing_category }}</td>
                                                  <td class="badge badge-success" style="padding:5px;margin:10px 10px;">Approved</td>
                                                  
                                                <td ;="" align="center">-</td>
                                                 <td><a href="{{ url('pricing-plans') }}"><button class="button md">Upgrade</button></a></td>   
                  
                                                
                                                    <td> <a  href="{{ url('my-listings/edit/' . $listing->id ) }}"> <button class="button ed">Edit</button> </a>  </td> 
                
                                                </tr>
                                                @empty
                                                <tr><td></td></tr>
                                                @endforelse
                                            </tbody>
                                        </table> {{ $listings->links('custompage') }}
 </div>
                                        
                                 