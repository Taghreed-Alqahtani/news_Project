<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $t=time();

        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'first_admin@gmail.com',
            'password' => Hash::make('Ad1212'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'second_admin@gmail.com',
            'password' => Hash::make('Ad1212'),
        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'These states have the most coronavirus cases. See the day-by-day breakdown.',
            'category' => 'COVID-19',
            'author_name' => 'Nigel Chiwaya and Joe Murphy',
            'content'=>'As U.S. authorities and medical personnel work to contain the coronavirus pandemic, the number of total cases is growing across the country at different rates. The factors are many, from when the disease first broke out in a place to the testing capabilities and the different stay-at-home orders in each state.

            When thousands of cases were being confirmed daily in New York, the state was the epicenter of the nation’s crisis and on a different scale than the rest of the country. The virus has since spread across the country, with new hotspots emerging each month.
            
            And while New York and New Jersey\'s Covid-19 outbreaks were the largest in the spring, several other states with high populations saw outbreaks as well. Note that cases in the U.S. are increasing due to improvements in testing capabilities as well as more people catching the disease.',
            'image'=>'article1.jpg',
            'created_at'=> date("Y-m-d",$t),
        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'Unvaccinated snow leopard at San Diego Zoo catches Covid-19',
            'category' => 'COVID-19',
            'author_name' => 'The Associated Press',
            'content'=>'Caretakers noticed that Ramil, a 9-year-old male snow leopard, had a cough and runny nose on Thursday. Later, two separate tests of his stool confirmed the presence of the coronavirus, the zoo said in a statement Friday.

            Ramil is not showing additional symptoms, the zoo said, but because he shares an enclosure with a female snow leopard and two Amur leopards, the staff assumes they have been exposed. As a result, the animals were quarantined and their exhibit was closed.
            
            It was unclear how Ramil got infected.',
            'image'=>'article2.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'Why empty offices aren\'t being turned into housing, despite lengthy vacancies',
            'category' => 'business',
            'author_name' => 'Cyrus Farivar',
            'content'=>'SAN FRANCISCO — Strachan Forgan, an architect who works downtown at 255 California St., is still struck by how much street life has changed around his office building. Gone are the pre-pandemic crowds of bankers and lawyers who jammed into the famed Tadich Grill across the street from his office. In recent months in his two-block walk from the nearby train station, he said, he has frequently been verbally assaulted and physically threatened by the rising number of homeless people.

            That\'s because even though San Francisco commercial office buildings are emptier than they have been in decades and the city is estimated to have 8,000 homeless people, it\'s unlikely that any of the empty offices will become homes for anyone at any economic level, even though more housing is desperately needed in general. Forgan, who both works on office-to-housing conversions and struggles to find employees who can find affordable housing to work at his firm, said it\'s too difficult to make happen.
            
            "It almost takes the stars to align," he said. "It\'s a unique set of circumstances that makes sense. So that\'s why it is relatively rare."
            
            Such conversions aren\'t happening in the rest of the country, as well. Planning departments of major cities, including San Francisco; San Jose, California; Seattle; Phoenix; New York; Fort Worth, Texas; Dallas; and Houston, said there are very few, if any, new attempts to turn existing offices into housing. Over the last two years, even during the height of the pandemic, there have been just a handful of such conversion applications in those cities, building officials said.',
            'image'=>'article3.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'White House makes more homeowners eligible for lower mortgage payments',
            'category' => 'politics',
            'author_name' => 'Reuters',
            'content'=>'WASHINGTON — Homeowners with certain government-backed mortgages could get their monthly payments reduced by 25 percent if they are still struggling to make payments, the White House said on Friday as part of efforts to help keep people housed amid the pandemic.

            The move targets those with loans backed by the departments of Housing and Urban Development, Agriculture or Veterans Affairs. They will be brought closer in line to those backed by Fannie Mae and Freddie Mac, the White House said.
            
            Homeowners who are still "looking for work, re-training, having trouble catching up on back taxes and insurance, or are continuing to experience hardship for another reason," are eligible, it added in a statement.',
            'image'=>'article4.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'Some Amazon warehouse workers see spike in Covid cases',
            'category' => 'business',
            'author_name' => 'Cyrus Farivar and April Glaser',
            'content'=>'As the nation faces a fourth wave of Covid-19, Amazon warehouse workers say the company is notifying them of a rising number of cases among employees. At the same time, the company is relaxing its mask policies and shutting down on-site free testing at the end of the month.

            According to one Amazon worker who regularly trains new employees at a facility at the Dallas-Fort Worth International Airport and asked to remain anonymous because she’s not allowed to speak to the press, many are flouting the rules. She says that some people come to her training wearing masks and unvaccinated. But she sees them remove their masks later on.
            
            At the same time, she says, cases are on the rise in her building. She wonders if her unvaccinated co-workers may be inadvertently spreading Covid at her workplace.
            
            “There was a dry spell for a couple months,” the woman said, referring to the automated emails she’s received from Amazon that disclose new Covid cases.. “But it’s picking back up.” NBC News has viewed several of the emails the company sent this month to notify employees of positive Covid cases in its Dallas-Fort Worth Airport facility.',
            'image'=>'article5.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'Ben & Jerry\'s withdraws sales from Israeli settlements but clashes with parent company Unilever',
            'category' => 'business',
            'author_name' => 'Olivia Solon',
            'content'=>'The board of Ben & Jerry\'s has clashed with its parent company, Unilever, over the handling of the withdrawal of its products from Israeli settlements.

            Ben & Jerry\'s released a statement Monday announcing that it would stop selling its ice cream in the occupied territories.
            
            "We believe it is inconsistent with our values for Ben & Jerry\'s ice cream to be sold in the Occupied Palestinian Territory," the statement said.
            
            Withdrawing the product requires the ending of a license agreement with a local franchisee who has distributed Ben & Jerry\'s in Israel since 1987. Through the franchise, the company has a manufacturing facility and two scoop shops south of Tel Aviv. However, the company\'s ice cream is also sold in grocery stores in Israeli settlements in the West Bank, which the U.N. Security Council has said are a "flagrant violation under international law."
            
            The licensing agreement expires in December 2022, and Unilever will not renew it, the company said.
            
            "Although Ben & Jerry\'s will no longer be sold in the OPT, we will stay in Israel through a different arrangement. We will share an update on this as soon as we\'re ready."',
            'image'=>'article6.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'Tokyo 2020 sponsor Toyota pulls Olympics TV ads in Japan as public support lags',
            'category' => 'olympics',
            'author_name' => 'Eiko Yahashi and Corky Siemaszko',
            'content'=>'TOKYO — Toyota said Monday it will not be airing TV commercials in Japan related to the Tokyo Olympics and neither the carmaker’s president nor other top executives will be attending the opening ceremony this week, as the Games continue to face a skeptical Japanese public.

            The announcement by Japan’s biggest automaker — and one of the Olympics\' top sponsors — was yet another blow to the competition, which was derailed last year by the coronavirus pandemic and which kicks off Friday with Tokyo under a state of emergency because of a recent rise in new cases of Covid-19.
            
            “It’s becoming an Olympics where a lot of things are not understood,” Toyota’s Chief Communications Officer Jun Nagata said Monday at a news conference with Japanese media.',
            'image'=>'article7.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'China\'s Yang Qian wins first gold of Tokyo Olympic games',
            'category' => 'olympics',
            'author_name' => 'Reuters',
            'content'=>'China\'s Yang Qian won the first gold medal of the Tokyo Olympics on Saturday after prevailing in a battle of nerves with Russian Anastasiia Galashina in the women\'s 10-metre rifle final.

            Galashina barely made it to the final, grabbing the last of the eight qualifying slots, but was in pole position for gold until she cracked under the pressure.
            
            That pressure also weighed heavily on South Korean shooting great Jin Jong-oh, whose quest for a record-extending fifth individual Olympic gold fell short when he failed to qualify for the final of the men\'s 10m air pistol.
            
            Javad Foroughi comfortably beat an elite field to win gold, Iran\'s first ever shooting medal, with a Games record total of 244.8 in the final.',
            'image'=>'article8.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'Pelosi appoints Republican Rep. Kinzinger to Jan. 6 committee',
            'category' => 'politics',
            'author_name' => 'Teaganne Finn',
            'content'=>'WASHINGTON — House Speaker Nancy Pelosi has added Republican Rep. Adam Kinzinger, an outspoken Trump critic, to the House select committee charged with investigating the Jan. 6 attack, she said in a statement on Sunday.

            "I swore an oath to uphold and defend the Constitution — and while this is not the position I expected to be in or sought out, when duty calls, I will always answer," Kinzinger said in a statement announcing he accepted the appointment.
            
            Last week, Pelosi rejected two of Minority Leader Kevin McCarthy\'s picks for the select committee, prompting the Republican to vow to pull all of his proposed appointees. Pelosi said she spoke with McCarthy, "about the objections raised" to his decision to appoint Republican Reps. Jim Banks, of Indiana, and Jim Jordan, of Ohio.
            
            The panel will investigate the events surrounding the deadly Jan. 6 attack on the U.S. Capitol by a mob of supporters of former President Donald Trump in an effort to halt certification of his election defeat.
            
            Kinzinger, of Illinois, would join the only other Republican on the committee, Rep. Liz Cheney, of Wyoming, who was ousted as chairwoman of the House Republican Conference after she criticized Trump and fellow Republicans for continuing to push false claims of fraud in the 2020 election.
            
            McCarthy criticized Kinzinger\'s addition in a statement, calling it a "self-appointment" that will not make the panel\'s inquiry a "serious investigation."
            
            The panel\'s chairman, Rep. Bennie Thompson, D-Miss., said Kinzinger is a welcome addition to the committee.
            
            He has demonstrated "that he can express his opinion despite what some of his Republican colleagues might want him not to express," said Thompson on MSNBC on Sunday. "An independent voice to the select committee is always welcome."',
            'image'=>'article9.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);

        DB::table('articles')->insert([
            'admin_id'=>'1',
            'title' => 'About 100 U.S. athletes in Tokyo unvaccinated as Olympics begin',
            'category' => 'COVID-19',
            'author_name' => 'Corky Siemaszko',
            'content'=>'TOKYO — Five out of 6 U.S. athletes competing in the Tokyo Olympics have been vaccinated against Covid-19, the team’s top doctor revealed Friday just before the Games officially begin.

            That information was culled from the health histories that 567 of the athletes filled out before they departed for Japan, said Dr. Jonathan Finnoff, who estimated that 83 percent of those competitors were fully vaccinated.
            
            “Eighty-three percent is actually a substantial number, and we’re quite happy with it,” Finnoff, the U.S. Olympic and Paralympic Committee’s medical chief, said.
            
            That\'s higher than the national rate, with about 56 percent of Americans having received at least one dose of a vaccine. But it still means that about 100 of the total contingent of 613 U.S. athletes have not yet been vaccinated.
            
            The news came as the opening ceremony of the pandemic-hit Games got underway in Tokyo\'s Olympic Stadium, marking the official launch of the global sporting event.',
            'image'=>'article10.jpg',
            'created_at'=> date("Y-m-d",$t),

        ]);
    }
}

// php artisan migrate:refresh

// php artisan migrate:refresh --seed
