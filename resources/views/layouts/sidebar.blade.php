        <div id="templatemo_sidebar">
        
        	<div class="sidebar_box">
            
                <h2>Our Services</h2> 
                <div class="news_box">
                    <ul>
                      @foreach($categories_five as $category)
                       <li><a href="services#{{$category->title}}">{{$category->title}}</a></li>
                      @endforeach
                       <li><a href="services">More...</a></li>
                    </ul>
                </div>
                
                <h2>Business Hours</h2> 
                <div class="news_box">
                    <strong>Mon-Fri: </strong>09:30 AM - 7:30 PM<br/>
                    <strong>Sat: </strong>09:30 AM - 05:30 PM<br/>
                    <strong>Sun: </strong>12:00 AM - 4:00 PM
                </div>
                
                <h2>Book an appointment</h2> 
                <div class="news_box">
                    <strong>Phone: </strong>(715) 381-7060<br/>                   
                </div>
            
            </div>
    
    	</div>