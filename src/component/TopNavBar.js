import React from 'react';
import {
    Routes,
    Route
  } from "react-router-dom";
import Gallery from './Gallery';
import Jobs from './Jobs';
import StockPhoto from './StockPhoto';
import Blogs from './Blogs';
;


class TopNavBar extends React.Component {   
    render() { 
        return ( 
        <header class="container">
            <Routes>
                <Route path="/gallery" element={<Gallery />} />
                <Route path="/stockphoto" element={<StockPhoto />} />
                <Route path="/jobs" element={<Jobs />} />
                <Route path="/blogs" element={<Blogs />} />
            </Routes>
            <ul>
                <li><a href="./" class="logo">
                    <img src="images/logo.png" alt="flyfarladies" /></a></li>
                <li>
                    <ul class="mainmenuparent">                   
                        <li class="sub-icon"><a href="/" class="sub-icon">Home </a></li>
                        <li class="sub-icon"><a href="/gallery" class="sub-icon">Gallery </a></li>
                        <li class="sub-icon"><a href="/stockphoto" class="sub-icon">Stock Photos </a></li>
                        <li class="sub-icon"><a href="/jobs">Jobs </a></li>
                        <li class="sub-icon"><a href="/blogs">Blogs </a></li>
                        
                        <li class="sub-icon"><a>Upcoming Packages</a>
                            <ul class="sub-menu">

                                <li class="sub-sub-icon"><a >Inbound Trip</a>
                                    <ul class="sub-sub-menu">
                                        <li><a  href="Inbound-Trip/Day-long-tirps-in-bangladesh">Day Long Trip</a> </li>
                                        <li><a href="Inbound-Trip/night-trips-bangladesh">Night Out Trip</a> </li>
                                    </ul>
                                </li>
                                <li><a href="International-Trip">international Trip</a> </li>

                            </ul>
                        </li>
                        <li class="sub-icon"><a>Travel </a>

                            <ul class="sub-menu">

                                <li><a href="test.aspx">Air Ticket </a></li>
                                <li><a href="test.aspx">Visa</a> </li>
                                <li><a href="test.aspx">Hotel Booking</a> </li>
                                <li><a href="test.aspx">Shutlle</a> </li>
                            </ul>

                        </li>



                        <li class="sub-icon"><a href="" class="sub-icon">Travel Shoping </a>

                            <ul class="sub-menu">

                                

                                        <li><a href="test.aspx">Swim suits</a> </li>

                                    

                                        <li><a href="test.aspx">Mask</a> </li>

                                    

                                        <li><a href="test.aspx">Poster</a> </li>

                                    

                                        <li><a href="test.aspx">sight Bad</a> </li>

                                    

                                        <li><a href="test.aspx">Passport holder</a> </li>

                                    

                                        <li><a href="test.aspx">dfbdz</a> </li>

                                    


                            </ul>

                        </li>
                        
                        
                    </ul>
                </li>




                <li class="openmenu">
                    <img src="images/common/menu.svg" alt="menu" /></li>


            </ul>
        </header>

         );

    }

    
}

 
export default TopNavBar;