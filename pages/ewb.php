<?php
    require_once("../include/const.php");
?>
<html>
    <head>
        <title>Cole Vaske</title>
        <link rel='stylesheet' href='../include/css/styles.css'>
        <link rel='stylesheet' href='../include/css/ewb.css'>
        <script src='../include/js/global.js'></script>
        <script src='../include/js/ewb.js'></script>
    </head>
    <a id='top'></a>
    <?php
        echo HEADER_STRING;
    ?>
    <div class='content-wrapper'>
        <div class='nav'>
            <span class='nav-heading'><b>EWB Sub-pages</b></span>
            <div class='separator-bar-wrapper'>
                <div class='separator-bar'></div>
            </div>
            <ul>
                <li>
                    <button onclick="loadPage('main')">Main</button>
                </li>
                <li>
                    <button onclick="loadPage('ne_team')">Nebraska Team</button>
                </li>
                <li>
                    <button onclick="loadPage('fundraising')">Fundraising</button>
                </li>
                <li>
                    <button onclick="loadPage('roles')">My Roles</button>
                </li>
                <li>
                    <button onclick="loadPage('travel')">Summer 2023 Travel</button>
                </li>
            </ul>
            <div class='separator-bar-wrapper'>
                <div class='separator-bar'></div>
            </div>
            <div class='single-img-container'>
                <img class='ewb-logo' src='../images/ewb/ewb_nu.png' alt='EWB-NU Logo'>
            </div>
        </div>
        <main>
            <div id='main'>
                <h1>University of Nebraska Engineers Without Borders</h1>
                <p>I have been a member of the University of Nebraska student chapter of Engineers Without Borders (EWB-NU) for my entire collegiate career. The chapter is responsible for a bridge project in Zambia and a solar panel project in Madagascar, as well as a number of local outreach events and programs.</p>
                <p>During my time at EWB, I have been treasurer, fundraising lead and manager of the "Nebraska Team", and vice president.</p>
                <p>This page and its subpages details EWB-NUs and its projects, events, and my involvement in the organization.</p>
                
                <h1>About EWB-NU</h1>
                <p>EWB-NU is the Nebraska student chapter of Engineers Without Borders-USA. It was founded in 2010 and is an inter-campus student organization within the University of Nebraska system and has members on both UNL and UNO campuses.
                <p>The chapter is comprised of three core teams: the Zambia bridge team, the Madagascar solar team, and the Nebraska Team.</p>
                
                <h1>Zambia Team</h1>
                <p>This team was formed in 2017 and has been working in Zambia within the Sindowe region. Within this region lies the town of Zimbe--a community separated by the Kalomo river.</p>
                <p>During the dry season, this river remains fairly tame--rarely reaching heights greater than a few inches. Sometimes it even runs dry, like how it did when the Zambia team visited for a surveying trip in the summer of 2022.</p>
                <div class='multi-img-container'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_1.jpg' alt='Kalomo River during the summer 2019 survey trip' title='Kalomo River during the summer 2019 survey trip'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_2.jpg' alt='Kalomo River during the summer 2022 secondary survey trip' title='Kalomo River during the summer 2022 secondary survey trip'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_3.png' alt='Kalomo River during the summer 2022 secondary survey trip' title='Kalomo River during the summer 2022 secondary survey trip'>
                    <img class='multi-square-img' src='../images/ewb/zambia/kalomo_4.png' alt='Kalomo River during the summer 2022 secondary survey trip' title='Kalomo River during the summer 2022 secondary survey trip'>
                </div>
                <p>However, during the rainy monsoon season, the river floods with rushing water. This creates dangerous conditions for people trying to cross between the two sides of the community--a year-round necessity given that one side of the river houses a hospital while the other has a large, popular marketplace.</p>
                <p>Members of this community have a need to cross year round, and every year at least one person dies trying to meet this need.</p>
                <p>As of Spring 2023, we are currently working on designing the bridge and evaluating the cost of construction materials for in-country fabrication.</p>
                
                <h1>Madagascar Team</h1>
                <p>Madagascar Tean was formed in 2009 to work with the rural Malagasy township of Kianjavato. Originally, our chapter intended to work on two projects with the community: a freshwater supply project, and a solar power project. The water project eventually was canceled and turned over to another NGO due to political reasons within the community.</p>
                <p>The power project with this community involves supplying power to schools within the township through solar panels and a battery array. These schools are quite dim even in the best of conditions, so we have also installed lights, enabling students to see better throughout the day and study into the night.</p>
                <div class='multi-img-container'>
                    <img class='multi-square-img' src='../images/ewb/madagascar/madagascar_1.jpg' alt='Group photo in Kianjavato' title='Group photo in Kianjavato'>
                    <img class='multi-square-img' src='../images/ewb/madagascar/madagascar_2.jpg' alt='Photo of studnets in a classroom in Kianjavato' title='Photo of studnets in a classroom in Kianjavato'>
                    <img class='multi-square-img' src='../images/ewb/madagascar/madagascar_3.jpg' alt='EWB members wiring in the attic of one of the schools' title='EWB members wiring in the attic of one of the schools'>
                </div>
                <p>Unfortunately, Madagascar recently experienced a severe monsoon season. Lots of infrastructure--including some of our systems--have been damaged. This, compounded by travel restrictions due to COVID-19 in the past few years, has extended the lifecycle of our project.</p>
                <p>I have actively been involved with Madagascar Tean as my time has permitted me during the past four years. I will be traveling to Madagascar this summer to assist with damage assessment and repairs.</p>

                <h1>Nebraska Team</h1>
                <p>The Nebraska Team was founded in ~2018 and was formed because our fundraising and local outreach activities grew too large for a committee of only officers to handle.</p>
                <p>The Nebraska Team is responsible for fundraising and local outreach. You can read more about the Nebraska Team under the "Nebraska Team" tab.</p>
            </div>
            <div id='ne_team' style='display: none;'>
                <div class='header-img-container'>
                    <img class='header-img' src='../images/ewb/ne/nebraska_header.jpg' alt='Group photo of 2023 Spring Bi-Annual Stream Cleanup' title='2023 Spring Stream Cleanup'>
                </div>
                <h1>EWB-NU "Nebraska Team"</h1>
                <p>The Nebraska Team is aptly named because it is the team responsible for local outreach in Lincoln and Omaha as well as the fundraising activites of the chapter. The team was formed in 2018 due to the level of workload on a single chairperson for either fundraising or outreach exceeding the reasonable time commitment of one person.</p>
                <p>I have been actively involved with the Nebraska Team of EWB-NU during each of my years as a student at UNL.</p>

                <h1>Local Outreach</h1>
                <p>The Nebraska Team has planned several outreach events for EWB-NU. Some of these events are regular--occurring annually or bi-annually, and some are one-off and are done based on the need of local volunteer organizations.</p>
                <p>Some EWB-NU local outreach events that have been completed during my time include:</p>
                <ul>
                    <li>The bi-annual Antelope Valley Creek "Stream Cleanup",</li>
                    <li>Annual canned food drives for Husker Pantry and local City of Lincoln food pantries,</li>
                    <li>Assisting Habitat for Humanity,</li>
                    <li>Volunteering for Omaha North High School VEX Robotics tournaments, and</li>
                    <li>Completing large-group tasks for the Lincoln Bike Kitchen.</li>
                </ul>
                <p>The Nebraska Team are not the sole volunteers at any local outreach event. They are responsible for planning, organizing, and facilitating any outreach event that the other EWB-NU members participate in (and sometimes with other organizaitons).</p>
                <p>If you have a need for a medium group of volunteers (5-12 people), please contact the chapter secretary at <a href='mailto:ewb.nebraska@gmail.com'>ewb.nebraska@gmail.com</a>.
                <div class='multi-img-container'>
                    <img class='multi-square-img' src='../images/ewb/ne/outreach_1.jpg' alt='Fall 2022 Stream Cleanup' title='Fall 2022 Stream Cleanup'>
                    <img class='multi-square-img' src='../images/ewb/ne/outreach_2.jpg' alt='Fall 2021 Stream Cleanup' title='Fall 2021 Stream Cleanup'>
                    <img class='multi-square-img' src='../images/ewb/ne/outreach_3.jpg' alt='Fall 2023 Canned Food Drive Haul' title='Fall 2023 Canned Food Drive Haul'>
                    <img class='multi-square-img' src='../images/ewb/ne/outreach_4.jpg' alt='Volunteering at the Lincoln Bike Kitchen' title='Volunteering at the Lincoln Bike Kitchen'>
                </div>
                
                <h1>Fundraising</h1>
                <p>Fundraising is the biggest activity that the Nebraska Team partakes in and is one of the fundamental activites for the chapter as a whole. Without fundraising for activities locally and more importantly our projects internationally, our projects would not be possible.</p>
                <p>You can read more about the Nebraska Team's, and by extension EWB-NU's fundraising activities, on the fundraising sub-page.</p>
            </div>
            <div id='fundraising' style='display: none;'>
                <h1>Fundraising</h1>
                <p>Despite not being flashy or as impressive as building a bridge over a gushing river or providing power to schools in the backcountry of a developing country, fundraising is one of the key activities of any student organization, but is especially true for EWB chapters. Travel expenses, in-country materials and supplies, local operation costs, and chapter fees amount to a high price tag for our chapter activities.</p>
                <p>Raising funds for our projects is by far one of our chapter's most challenging activities.</p>
                <p>As a result, fundraising is a primary activity for the chapter and is spearheaded (in terms of organization) by our chapter's Nebraska Team. From Fall 2021 through Spring 2023, I was a Nebraska Team Lead, responsible for leading this team and the chapter as a whole in its fundraising efforts.</p>

                <h1>Fundraising Activities & Sources of Funding</h1>
                <h2>Pizza Thursday</h2>
                    <p><i>"Every THursday is Pizza Thursday"</i></p>
                    <p>This is one of EWB-NU's premier and most unique fundraisers which I consider my personal favorite. As a side note, the idea for this fundraiser was inspired by a similar fundraising format attempted by the Iowa State University chapter in 2014.</o>
                    <p>Each Thursday during the regular UNL academic year, EWB-NU tables on the second floor landing of West Nebraska Hall and sells pizza to passing students, faculty, staff, and construction workers.</p>
                    <p>This event may seem easy, but it can be difficult to coordinate with the UNL offices to get the cash box and card reader, coordinate with members to make sure we are staffed and ready on time, and ensuring the pizza order is placed with the correct amount of pizza to sell out during lunch time.</p>
                    <p>In particular, my favorite part about this event was the social experiments I would run on each passing person. I found that if you made eye contact and said "Hello" to a stranger at the optimal time, you could get them to stop and sort of guilt-trip them into purchasing a slice of pizza.</p>
                <h2>Pizza Thursday Partnerships</h2>
                    <p>An extension of Pizza Thursday is the Pizza Thursday partnerships. Occasionally, a company tables at our usual spot for Pizza Thursday and will talk to passing students about internships and full-time starting positions that they offer. This occurs on any day of the working week--not just on Thursday.</p>
                    <p>To capitalize on this potential source of revenue, we began "partnering" with the companies neighboring us on Thursdays. Here's how it worked:
                        <ol>
                            <li>We organize and confirm all details of the event witht he partnering company.</li>
                            <li>Leading up to the event, EWB begins extensive advertising throughout the college of engineering, advertising the tabling event and luring students in with free pizza.</li>
                            <li>At the start of the event, we hand the partnering company two stacks of vouchers: one stack of vouchers for one (1) free slice of pizza, and one stack of vouchers for two (2) free slices of pizza.</li>
                            <li>Hoards of students come to talk to the recruiting company for the prospect of free pizza. Then, they receive a free pizza voucher as follows:
                                <ul>
                                    <li>A single free slice voucher for speaking with the recruiting company, and</li>
                                    <li>A two-free slice voucher for speaking witht he recruiting company AND bringing a physical copy of their resume.</li>
                                </ul>
                            </li>
                            <li>Students meander over to our table and exchange their voucher for their "free" pizza!</li>
                            <li>At the end of the event (either by time constraints or when we run out of pizza), we tally up the vouchers and charge the partnering company for the pizza they handed out.</li>
                        </ol>
                    </p>
                    <p>This is a newer fundraising effort of ours and has been a huge success--pulling in hundreds of dollars for us each week. Our partners love it too--they get the opportunity to talk to many more students than they would have without the advertising and free pizza!</p>
                <h2>Glow Big Red & the NU Foundation</h2>
                    <p>The NU Foundations, UNL's non-profit donation center, hosts "Glow Big Red", which is an annual fundraiser for all of the organizations on campus. The event offers prizes to organizations reaching certain milestones and prizes to donors.</p>
                    <p>Organizationally, this is our easiest fundraiser. Our biggest activities involve contacting alumni, friends, supporters, and family to donate to our cause.</p>
                    <p>While you technically won't receive any of the benefits of donating during Glow Big Red, you can still make a donation to our <a href='https://nufoundation.org/fund/01123360/'>NU Foundation</a> account year-round.</p>
                <h2>Spring Minigolf Fundraisers</h2>
                    <p>The Spring Minigolf Fundraiser <i>"Engineers Without Bogeys"</i> is our largest fundraiser of the year and requires planning year-round. It has replaced our annual "Fun Run", originally hosted in Gretna outside of Omaha each year prior to 2022.</p>
                    <p>For this event, we spend many weeks calling and e-mailing corporate engineering companies soliciting sponsorships containing different advertising packages. In the weeks leading up to the event, these sponsors have their logos added to advertisements for the event, and are publicly invited to and thanked at the event itself.</p>
                    <p>The event itself is hosted at a minigolf venue in Lincoln, NE. All of our members are present, and we invite as many students from the university (particularly the College of Engineering) as possible. Our sponsors love to spend their time networking with students at the event and like to know that their logo is in front of students' eyes.</p>
                    <p>Our 2023 Spring Minigolf Fundraiser is on Saturday, April 29, from 12:00-2:00PM. Tickets can be purchased from our <a href='https://support.ewb-usa.org/event/university-of-nebraska-chapter-spring-2023-engineers-without-bogeys/e467301'>Classy page</a>, and any additional information about the event itself can be found on that page as well.</p>
                    <div class='multi-img-container'>
                        <img class='multi-square-img' src='../images/ewb/ne/minigolf_1.jpg' alt='Minigolf Fundraiser Photo' title='Minigolf Fundraiser Photo'>
                        <img class='multi-square-img' src='../images/ewb/ne/minigolf_2.jpg' alt='Minigolf Fundraiser Photo' title='Minigolf Fundraiser Photo'>
                    </div>
                <h2>The Nebraska College of Engineering</h2>
                    <p>We receive partial funding through the College of Engineering by avenue of their Student Program Fund applications through the Engineering Student Advisory Board</p>
                    <p>This is a fairly straightforward process handled by the chapter's Vice President. However, it can be an unreliable source of funding depending on how much money the College is willing to set aside for student organizations each semester.</p>

                <h1>Chapter Expenses</h1>
                <p>As noted previously, there are different types of expenses that EWB-NU incurs as part of chapter operation. Those include:</p>
                <ul>
                    <li><b>In-country supplies and materials costs</b>. These are costs incurred any time one of the project teams travels to their international communities and can fluctuate depending on the activities for that trip. For example, a surveying trip will generally incur far fewer costs than a trip dedicated to construction or installation.
                        <br><br>We are anticipating to incur expenses to the tune of <b><u>over one hundred thousand dollars</u></b> within the next few years as we begin construction on the suspension bridge over the Kalomo River in Zimba, Zambia.</li>
                    <br>
                    <li><b>Local operation costs</b>. Some of our local activities incur costs. These activities can be associated with our travel teams, such as developing a model solar panel system to onboard new members onto the solar team, or are used by our Nebraska Team for outreach activities, such as advertising for a canned food drive.</li>
                    <br>
                    <li><b>Travel expenses</b>. For our members and mentors to get to our projects, they need to travel internationally. This typically costs between $4000 and $5000 per person, which can quickly accumulate into a high price tag for each trip. To mitigate this and make sure each students' intentions are correct, individual students traveling are responsible for raising their own funds to cover travel expenses.</p>
                    <br>
                    <li><b>Chapter fees</b>. EWB-USA, the national organization of which our chapter is associated, charges fees to its chapters for the services it provides. The organization also charges a high project fee to ensure that its chapters are closing projects and serving their communities as quickly as possible.</li>
                </ul>
            </div>
            <div id='roles' style='display: none;'>
                <h1>My Roles in EWB-NU</h1>
                <p>During my time in EWB-NU, I have attained a number of leadership roles. This page chronologizes these positions.</p>

                <h1>Treasurer</h1>
                <p>As a sophomore student, I was still relatively new to EWB. This was my first leadership role and was a very good introduction to leadership within EWB.</p>
                <p>My tasks primarily involved acting as a representative with the University Student Organization Financial Services Office, which entailed approving member reimbursement requests, auditing our expense reports, and keeping track of the total account balance with both the SOFS office and our EWB-USA account.</p>

                <h1>Fundraising Lead</h1>
                <p>By Junior year, I sought a more involved role. Fundraising Lead is one of two leadership roles involved with managing the Nebraska Team and is responsible for managing all of the fundraising activities of the chapter, except for applying for Student Program Funds from the college. This role is by far one of the most involved roles in the chapter and is a huge time commitment.</p>
                <p>This role encompasses all of the fundraising activities that the organization engages in. This includes the Minigolf Fundraiser, Pizza Thursday, Glow Big Red, and writing a newsletter to supporters. Ultimately, it is up to the Fundraising Lead to ensure that these activities are completed, and done well.</p>
                <p>This role is particularly challenging because it involves being a leader of the Nebraska Team. This is both a blessing and a curse, because while it is nice to have a dedicated team of people to help you with the fundraising efforts, it can be difficult to communicate all of the requirements and make sure each member is completing their tasks appropriately.</p>
                <p>I was a fundraising for both my junior and senior years.</p>

                <h1>Vice President</h1>
                <p>The Vice President is a highly active member in Engineers Without Borders, aware of all activities of the club, its officers, and its teams. In addition to the president, the vice president is to act as a general leader of the club, stepping up when members or officers need help, or something needs to get done.</p>
                <p>My primary job as a vice president was to act as an ambassador between the College of Engineering (through the Engineering Student Advisory Board) and the organization itself. To receive funding from the college, an organization needs to be in good standing with the college.</p>
                <p>This role improved my interpersonal skills as I acted as a representative for EWB to a large body of students, professors, and staff within the College of Engineering.</p>
                <p>I assumed the role during my senior year, concurrently as a Fundraising Lead as well.</p>
            </div>
            <div id='travel' style='display: none;'>
                <h1>Summer 2023 Madagascar Travel</h1>
                <p>This summer, despite having to be a recent graduate, I will be traveling to Kianjavato in Madagascar to assist the solar team with assessing recent damages to our installed systems, documenting damage, and making minor repairs.</p>
                <p>We will leave the United States to Paris International Airport on May 31 and leave the international airport in Antananarivo, Madagascar on June 17.</p>
                <p>For the bulk the trip, we will be staying at the <a href='https://madagascarpartnership.org/field-sites/kianjavato/'>Madagascar Biodiversity Partnership</a> field office in Kianjavato. This partnership is through the Henry Doorly Zoo--which is likely the reason our chapter was selected to take on this project in Kianjavato.</p>
                <div class='single-img-container'>
                    <iframe class='kianjavato-map' src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6772.613277646937!2d47.862837310289656!3d-21.379580527546505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21e8f6ca07d090eb%3A0x45ce81e88ed9e860!2sKianjavato%2C%20Madagascar!5e1!3m2!1sen!2sus!4v1682627733514!5m2!1sen!2sus"></iframe>
                </div>
            </div>
            <br><br><br>
        </main>
    </div>
    <?php
        echo FOOTER_STRING;
    ?>
</html>