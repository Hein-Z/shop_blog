<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 11,
                'category_id' => 1,
                'title' => 'Blogging',
                'seo_title' => NULL,
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Post',
                'body' => '<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Blogging is something I enjoy doing. I love writing about wildlife. It has given me the opportunity to interact with many passionate people, many of whom also have blogs. It seems that I spend at least one hour a day browsing the internet, keeping myself updated on the happenings of naturalists. Many of these people are more talented than me. With this in mind, I decided to create a post that highlights some of my favorite wildlife bloggers and points out their websites so that you can also take a look. The blogs below have amazing accounts, including creative writing and opinion pieces. They also cover local patches reporting and educational articles.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">Alex White &ndash; Appleton Wildlife Diary</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">This is a wonderful account of wildlife around Alex&rsquo;s county of Oxfordshire and sometimes further afield. It is written beautifully and features some amazing photography. This site was introduced to me by the BBC Local Patch Reporters thread. I have been a faithful reader since then. Alex recently wrote a great piece for the blog &lsquo;Rants for Change. It touched on a topic that is all too familiar to many young naturalists. You can find it here. It is a great feeling to see the younger generation take an active interest in natural history.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">The Reremouse &ndash; Morgan Bowers</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">This blog is easily one of my favorite and most attractive. It&rsquo;s also packed with useful information about everything, from bushcraft to species identification to even cooking! Morgan&rsquo;s website is certainly worth a visit. It is one of the most educational pages on this list. You might even learn something, as I have. This blog is for you if badger lovers like me.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">Megan Shersby &ndash; Barcode Ecology</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Megan&rsquo;s blog is similar to mine. It focuses primarily on her personal experiences with nature. She also shares exciting trip reports and other information. Megan has been a delight to follow, but perhaps what is more fascinating is her willingness to set herself new challenges each year via her &ldquo;wildlife resolutions&rdquo;, something that I don&rsquo;t see very often on other websites. Barcode Ecology is interactive, and there are occasional quizzes to keep you on your toes.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">Kingfisher Blog Warren Price</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Warren&rsquo;s blog is unique because it focuses on a single species of Kingfisher. It is both educational and entertaining to follow the lives of Warren&rsquo;s Kingfishers via informative updates and stunning photography. The majority of photos here will make you weak at your knees. They are sharp and beautiful. It&rsquo;s well worth the read.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">Wild South London &ndash; Will Harper Penrose</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Before I get into the details of the blog, I want to point out that Will&rsquo;s writing style is what keeps me reading his posts. His ability to paint vivid pictures of his adventures is unmatched. It almost feels like you are there with him. &ldquo;Wild South London&rdquo; is a blog that chronicles the adventures and explorations of the author in nature. It also features excellent photography and a dedication to natural history. This is my recipe for success.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">Birding with Gus &ndash; Gus Routledge</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Gus Routledge&rsquo;s blog is another favourite of mine. It combines educational posts with stories about local adventures, and it is a joy to read. This blog is a must-read for anyone with an interest in botany or birds. Gus&rsquo;s blog is a great resource for anyone interested in botany (or birds). I confess that I often fall into a stupor when plants are mentioned. However, Gus&rsquo;s blog keeps me engaged, and I find myself enjoying reading posts about mosses, liverworts, and other related topics.</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; font-weight: bold;">Dan Rouse &ndash; Self Titled</span></p>
<p style="box-sizing: border-box; border: 0px; font-family: \'open sans\', Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px 0px 24px; outline: 0px; padding: 0px; vertical-align: baseline; color: #424242;"><span style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">It&rsquo;s quite amazing that I managed to complete this list without adding a blog from another birder. Here it is. Dan&rsquo;s blog is an excellent mix of informative pieces, trip reports and opinion articles. Dan is a friend of mine through Next Generation Birders, and I know how passionate she is about the natural world. It is worth clicking the Follow button to see all of her enthusiasm on her blog.</span></p>',
                'image' => 'posts/post1.jpg',
                'slug' => 'blogging',
                'meta_description' => 'This is the meta description',
                'meta_keywords' => 'keyword1, keyword2, keyword3',
                'status' => 'PUBLISHED',
                'featured' => 1,
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-10-11 17:35:31',
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 0,
                'category_id' => NULL,
                'title' => 'My Sample Post',
                'seo_title' => NULL,
                'excerpt' => 'This is the excerpt for the sample Post',
                'body' => '<p>This is the body for the sample post, which includes the body.</p>
<h2>We can use all kinds of format!</h2>
<p>And include a bunch of other stuff.</p>',
                'image' => 'posts/post2.jpg',
                'slug' => 'my-sample-post',
                'meta_description' => 'Meta Description for sample post',
                'meta_keywords' => 'keyword1, keyword2, keyword3',
                'status' => 'PUBLISHED',
                'featured' => 1,
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 0,
                'category_id' => NULL,
                'title' => 'Latest Post',
                'seo_title' => NULL,
                'excerpt' => 'This is the excerpt for the latest post',
                'body' => '<p>This is the body for the latest post</p>',
                'image' => 'posts/post3.jpg',
                'slug' => 'latest-post',
                'meta_description' => 'This is the meta description',
                'meta_keywords' => 'keyword1, keyword2, keyword3',
                'status' => 'PUBLISHED',
                'featured' => 1,
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
            3 => 
            array (
                'id' => 4,
                'author_id' => 0,
                'category_id' => NULL,
                'title' => 'Yarr Post',
                'seo_title' => NULL,
                'excerpt' => 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.',
                'body' => '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>
<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>
<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>',
                'image' => 'posts/post4.jpg',
                'slug' => 'yarr-post',
                'meta_description' => 'this be a meta descript',
                'meta_keywords' => 'keyword1, keyword2, keyword3',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-01-09 09:34:02',
            ),
        ));
        
        
    }
}