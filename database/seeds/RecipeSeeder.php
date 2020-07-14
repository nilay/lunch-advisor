<?php

use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
        	[ 'name' => 'Indonesian Satay', 'description' => 'Satay is meat skewers that are cooked over coals. These juicy skewers is usually served with rice cakes (ketupat) with peanut sauce poured all over the satay. It is a national dish conceived by street vendors and has been one of most celebrated food in Indonesia. It is practically everywhere and highly addictive.'],

        	[ 'name' => 'Beef Rendang', 'description' => 'This dish originated from Padang, Sumatra. Padang food is famous for its spicyness and richness in flavor. You definitely have to try Beef Rendang. It is somehow similar to Beef Curry but without the broth. We get to appreciate this dish because it take forever to cook to get that tenderness out of the beef. Try this Padang goodness and let the world know how tasty it is!'],

        	[ 'name' => 'Fried Rice', 'description' => 'I think this dish doesn’t need any further introduction. Indonesian Fried Rice and its reputation has taken the world by storm. Don’t you agree? Literally everyone has tried Fried Rice at some point in their life and it is the most versatile dish out there. You can mixed it with veggies, chicken, beef, seafood, whatever it is that you can think of. What makes Indonesian Fried Rice different is the use of sweet, thick soy sauce called keycap and garnished with acar, pickled cucumber and carrots. Nasi Goreng (Fried Rice) is considered Indonesia’s national dish.'],

        	[ 'name' => 'Nasi Rawon', 'description' => 'Nasi Rawon is a dish made of beef stew from East Java. Rawon has this nutty flavour and a deep, black color from the use of keluak nut. It is rich in flavor. This dish is best enjoyed with a bowl of rice. Yummy and hearty at the same time. Find out for yourself.'],

        	[ 'name' => 'Sop Buntut', 'description' => 'The title says it all. It is a soup with Oxtail as its main hero. Although believed that oxtail soup was invented in London in the seventeenth century but this Indonesian version of oxtail soup is popular as ever. It is a healthy and hearty soup loved by many people. The oxtail is usually fried or barbecued and combined with a soup base. Very tasty and yummy.'],

        	[ 'name' => 'Siomay', 'description' => 'As you may or may not already know, most of Indonesian street food has something to do with peanut sauce. This dish right here called Siomay is Indonesia’s version of dim sum. This dish contain steamed fish dumplings. The portion comes with steamed potato, cabbage, egg and served with peanut sauce. If you want to go all local, the best way to enjoy Siomay is from a bicycle vendor, who carts his large steamer at the back of his bike. Street food at its best.'],

        	[ 'name' => 'Indomie', 'description' => 'This product is so sinful that we cannot help but be seduced by it. Cost merely around 25 cents a pack and you get a quick and satisfying snack. It is none other than our very own Indonesian Instant Noodles! With so many flavours to choose from, you’ll be left with more than enough choices. I can’t think of anyone who has ever tried every single flavour that are available out there. The options are endless and too many to choose from that you’d hope they would stop inventing more flavours. Give it a taste and tell us if Indonesian Indomie is better than the others'],

        	[ 'name' => 'Nasi Uduk', 'description' => 'This aromatic dish is also one of Indonesia’s national dish. The meal revolves around rice cooked in coconut milk. It is quite similar to Nasi Lemak from our neighbouring country, Malaysia. The difference is that nasi uduk is usually served with fried chicken, tempe (soybean cake), shredded omelette, fried onion, anchovies and topped with sambal and emping (melinjo nut crackers). You definitely cannot leave out sambal for Nasi Uduk. This dish is popular among lunchtime crowds.'],

        	[ 'name' => 'Sweet Martabak', 'description' => 'One of our favorite desserts would be Indonesian Sweet Martabak. It is an Indonesian version of a pancake. The interesting thing is, Martabak is only sold in the evenings. You can choose mix fillings from chocolate, cheese and peanuts.'],

        	[ 'name' => 'Pempek', 'description' => 'Last but not least, Pempek. Pempek or empek-empek is made of fish and tapioca. It is a Palembang specialty in South Sumatra. Pempek comes in a variety of shapes and sizes. The most popular one is called, kapal selam (submarine), contains an egg in the middle. Pempek is sprinkled with shrimp powder and served with cuka, a dark dipping sauce made from vinegar, chill and sugar.']

        ]);
    }
}
