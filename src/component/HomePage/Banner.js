import React from 'react';


class Banner extends React.Component {
    constructor(props) {
        super(props);
    }
   
    state = {  }
    render() { 
        return ( 

            <section class="journey-banner">
                <div class="banner-slide">
                    <img class="lazy" src="images/banner.jpg" alt="banner" />                   
                </div>
                <div class="container">
                    <div class="content-box">
                        <div class="title">Fly Far Ladies</div>
                        <h1 class="heading">Adventure is Worthwhile </h1>
                    </div>

                    <div class="journey-search">
                        <div class="left">Find Your  <strong>Destination </strong></div>
                        <ul>       
                            <li class="in">
                                <select name="ctl00$ContentPlaceHolder1$drpyear" id="ContentPlaceHolder1_drpyear">
                                    <option value="0">Select Year</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>       
                                 </select>       
                            </li>
        
                            <li class="in">
                                <select name="ctl00$ContentPlaceHolder1$drpmonth" id="ContentPlaceHolder1_drpmonth">
                                    <option value="0">Select Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option> 
                                </select>
                            </li>
        
                            <li>
                                <select name="ctl00$ContentPlaceHolder1$drptripplan" id="ContentPlaceHolder1_drptripplan">
                                    <option value="0">Select Inbound/Outbound </option>
                                    <option value="1">Inbound</option>
                                    <option value="2">Outbound</option>                             
                                </select>       
                            </li>
        
                            <li>
                                <select name="ctl00$ContentPlaceHolder1$drptriptype" id="ContentPlaceHolder1_drptriptype">
                                    <option value="0">Select Day Trip/Night out Trip</option>
                                    <option value="1">Day Trip</option>
                                    <option value="2">Night out Trip</option>    
                                </select>
                            </li>
                
                            <li>
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnsearch" value="SEARCH" id="ContentPlaceHolder1_btnsearch" class="btn-search" />                               
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        );
    }
}
 
export default Banner;