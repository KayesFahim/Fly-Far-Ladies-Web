import React from "react";


class PropularTour extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return (

            <section class="most-popular-tours">
                <div class="container">
                    <h2 class="heading">Most Popular Tours</h2>
                    <p id="ContentPlaceHolder1_populartour" class="intext">Check out the Most Popular Tours deals below to book your holiday for the best price! Various promotions run throughout the year, so keep an eye out to bag the hottest of bargains for unforgettable experiences.</p>

                    <ul class="bolg-slider">
                        <li>
                            Tour1
                        </li>
                        <li>
                            Tour1
                        </li>
                        <li>
                            Tour1
                        </li>
                        <li>
                            Tour1
                        </li>

                    </ul>
                </div>

            </section>


         );
    }
}
 
export default PropularTour;