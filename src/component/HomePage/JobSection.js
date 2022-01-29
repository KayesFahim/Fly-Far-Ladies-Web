import React from 'react';

class JobSection extends React.Component {
    constructor(props) {
        super(props);
    }
    state = {  }
    render() { 
        return ( 
        <section class="features-job" id="jobcategorylist">
            <div class="container">
                <div class="top-title">Emoployers Offering job </div>
                    <h2 class="heading">Here's Features Job</h2>
                        <ul class="jobcategorylist">
                            <li>
                                Job1
                            </li>
                            <li>
                                Job2
                            </li>
                            <li>
                                Job3
                            </li>
                            <li>
                                Job4
                            </li>
                        </ul>

                        <p>Job are waiting for you <a href="job_index.aspx">browes all jobs</a></p>

            </div>
        </section>
         );
    }
}
 
export default JobSection;