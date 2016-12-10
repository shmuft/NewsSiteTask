<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 08.12.16
 * Time: 16:20
 */

namespace Shmuft\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Shmuft\NewsBundle\Entity\News;

class NewsFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $news1 = new News();
        $news1->setTitle("Lucky day for cat!");
        $news1->setBody("Cat can go out from his home today! It is good news!");
        $news1->setTags("cat, home, today");
        $news1->setCreated(new \DateTime());
        $news1->setUpdated($news1->getCreated());
//        print_r($news1);
        $manager->persist($news1);

        $news2 = new News();
        $news2->setTitle("How win? Dog or cat?");
        $news2->setBody("Today is hood day for play in chess. And cat can win dog!");
        $news2->setTags("cat, putty, chess, dog, today");
        $news2->setCreated(new \DateTime());
        $news2->setUpdated($news2->getCreated());
        $manager->persist($news2);

        $news3 = new News();
        $news3->setTitle("Good night!");
        $news3->setBody("Good night my dears!");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("Trump Picks Scott Pruitt, Climate Change Denialist, to Lead E.P.A.");
        $news3->setBody("WASHINGTON — President-elect Donald J. Trump has selected Scott Pruitt, the Oklahoma attorney general and a close ally of the fossil fuel industry, to run the Environmental Protection Agency, signaling Mr. Trump’s determination to dismantle President Obama’s efforts to counter climate change — and much of the E.P.A. itself.
Mr. Pruitt, a Republican, has been a key architect of the legal battle against Mr. Obama’s climate change policies, actions that fit with the president-elect’s comments during the campaign. ");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("Climate Change Will Bring Wetter Storms in U.S., Study Says");
        $news3->setBody("Decades of research (and perhaps your own recent experiences on hot, humid days) have suggested that climate change will lead to an increase in big storms that cause flash floods, landslides and other natural disasters. Now, a new study shows that such intense precipitation will most likely increase across the continental United States, but with important regional variations.

The study by scientists from the National Center for Atmospheric Research in Boulder, Colo., published on Monday in Nature Climate Change");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("You’re a Bee. This Is What It Feels Like.");
        $news3->setBody("Set your meetings, phone calls and emails aside, at least for the next several minutes. That’s because today you’re a bee.

It's time to leave your hive, or your underground burrow, and forage for pollen. Pollen is the stuff that flowers use to reproduce. But it’s also essential grub for you, other bees in your hive and your larvae. Once you’ve gathered pollen to take home, you or another bee will mix it with water and flower nectar that other bees have gathered and stored in the hive. But how do you decide which flowers to approach? What draws you in?");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("3,800-Year-Old Statue Resembling ‘The Thinker’ Found in Israel");
        $news3->setBody("Reading this article right now, you might resemble this 3,800-year old statue resting its cheek upon its hand. It’s a common pose for computer browsing, but a rare sight in Bronze Age pottery.

A group of high school students helped archaeologists from the Israel Antiquities Authority unearth this clay vessel in the city of Yehud near Tel Aviv in September. They were excavating a burial site when someone came across the seven-inch statue covered in dirt and surrounded by ceramic shards.");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("$25 Million in Breakthrough Prizes Given in Science and Math");
        $news3->setBody("The biggest prize payday in science came around again Sunday evening when the Breakthrough Foundation handed out more than $25 million in its annual prizes to more than a thousand physicists, life scientists and mathematicians.

This year’s winners include five molecular biologists who won $3 million each for work in genetics and cell biology, one mathematician, a trio of string theorists who split one $3 million physics prize, and another 1,015 physicists working on the LIGO gravitational wave detector split a special $3 million physics prize. In addition, there were six smaller “New Horizons” prizes totaling $600,000 for 10 “early career” researchers, and a pair of high school students won $400,000 apiece for making science videos.");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("With Shifts in National Mood Come Shifts in Words We Use, Study Suggests");
        $news3->setBody("In the wake of the election, it’s clear American society is fractured. Negative emotions are running amok, and countless words of anger and frustration have been spilled. If you were to analyze this news outlet for the ratio of positive emotional words to negative ones, would you find a dip linked to the events of the past few weeks?

It’s possible, suggests a study published last week in Proceedings of the National Academy of Sciences. Analyzing Google Books and The New York Times’s archives from the last 200 years, the researchers examined a curious phenomenon known as ");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("How Cassini Will Begin Its Date With Death on Saturn");
        $news3->setBody("It’s the beginning of a spectacular, almost circuslike end for NASA’s Cassini mission. For 12 years Cassini has been buzzing about Saturn, its rings and its moons. As a result we know that there are methane lakes on Titan and jets of water shooting from Enceladus, and the rings themselves have warps, ripples, hills twists and braids.

Now the Cassini spacecraft has gradually shifted into an orbit that takes it over the planet’s north and south poles and then down into a series of increasingly vertiginous-looking dives perpendicular to the plane of its buttery glowing rings.");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("The Gadget Apocalypse Is Upon Us");
        $news3->setBody("Remember gadgets?

They were little electronic things that did stuff for you. They would play music or record videos or give you directions or let you play games on the go. They were fun. Everyone had them. Everyone wanted them. There were whole magazines and websites and even TV shows devoted to them.

For 30 or 40 years, through recessions and war, through stability and revolutions, they were always there, one gadget after another, from transistor radios to TRS-80s to Walkmen and Gameboys, then iPods and Flips, GoPros and Fitbits. We were sure gadgets would always be with us, because they had always been with us, and it was good.");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $news3 = new News();
        $news3->setTitle("With LinkedIn, Microsoft Looks to Avoid Past Acquisition Busts");
        $news3->setBody("SEATTLE — Microsoft announced on Thursday that it had completed its $26.2 billion acquisition of LinkedIn, the social network for professionals.

There are ample reasons to be skeptical that the deal, the biggest by far in Microsoft’s history, will pay off.

");
        $news3->setTags("goodnigt, night, today");
        $news3->setCreated(new \DateTime());
        $news3->setUpdated($news3->getCreated());
        $manager->persist($news3);

        $manager->flush();


    }

}