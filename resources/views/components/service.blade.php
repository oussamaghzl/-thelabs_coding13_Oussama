
	<!-- Services section -->
	<div class="services-section spad pb-0">
        <div class="container">
            <div class="section-title dark">
                <h2>{!! $tab[3] !!}</h2>
            </div>
            <div class="row">
    
                @foreach ($service as $item)
    
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="icon">
                                <i class="{{$item->icone->image}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$item->titre}}</h2>
                                <p>{{$item->text}}</p>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
                
            </div>
            

            
            <div class="row justify-content-center ">
                
                {{  $service->fragment('service')->links('vendor.pagination.bootstrap-4') }} 
            </div>



            
        </div>
        </div>
        <!-- services section end -->