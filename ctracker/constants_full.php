<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
*
*/

/**
* In this file we have some constants we use in some places of the
* CrackerTracker System and we define some definitions for the Spammer
* and Throw-Away Mail detection. Definition Updates will also just be
* a replacement of this file. ;-)
*
* @author Christian Knerr (cback)
* @package ctracker
* @version 5.0.6
* @since 22.07.2006 - 01:57:01
* @copyright (c) 2006 www.cback.de
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt!');
}

/*
 * Constants we need
 */
define('CTRACKER_VERSION', '5.0.6');		// CrackerTracker Version
define('CT_FIRST_ADMIN_UID', '2');			// UserID of the first Admin

/*
 * Extended Definitions
 */
$ct_spammer_def = array();					// Reset Definition Array "Spammer"
$ct_mailscn_def = array();					// Reset Definition Array "Mailscan"
$ct_userspm_def = array();					// Reset Definition Array "Userblocks"

$ct_spammer_def = array(
	'*pills*',
	'*viagra*',
	'*phentermine*',
	'*buycheapphenter*',
	'*animalporn*',
	'*online*roulette*',
	'*on*line*casino*',
	'*casino*on*line*',
	'*masterbell.net*',
	'*Your*site*there*is*future*',
	'*online*dating*',
	'*forumgratis.com*',
	'*valium*',
	'*fantasticsex*',
	'*free-sex*',
	'*free*nice*pics*',
	'*you*search*friend*',
	'*dating*',
	'*flirt*',
	'*my_photos*',
);

$ct_mailscn_def = array(
	'*@*.acb.pl',
	'*@*.byethost7.com',
	'*@tobaccowizard.com',
	'*@*.cnazn.info',
	'*@*.hispharm.info',
	'*@*boom.ru',
	'*@*cigarettes.*',
	'*@*pharmacy.*',
	'*@.com',
	'*@000buy.com',
	'*@0alice.info',
	'*@0virginia.info',
	'*@1077-assistenza-tecnica-milano.subit05.info',
	'*@10minutemail.com',
	'*@10pharm.com',
	'*@656-crdit.info',
	'*@aberdeenwashingtonways.com',
	'*@abilityonline.info',
	'*@about-britney-spears.info',
	'*@abovegroundpooldeckissues.com',
	'*@abovegroundpoolfiltershoppers.com',
	'*@acb.pl',
	'*@adidas-in-da-style.info',
	'*@adultgallerywebcams.info',
	'*@adultlisting.info',
	'*@advertfast.com',
	'*@affiliatehbizclub.com',
	'*@afgcb.pl',
	'*@agolubi.org',
	'*@ahrump.com',
	'*@aisdsports.info',
	'*@ajiex.info',
	'*@albendazole.org',
	'*@alcohol-free-journal.info',
	'*@alertonline.info',
	'*@alexandria.cc',
	'*@algerie.cc',
	'*@aliance-comm.info',
	'*@all-software.info',
	'*@allionicbreeze.info',
	'*@allmedicines.t35.com',
	'*@allwebdrugs.info',
	'*@alphaspace.org',
	'*@alternative-email-service.info',
	'*@alternative-it.info',
	'*@amateurswebcams.info',
	'*@americaloan.info',
	'*@amnevsepoh.info',
	'*@aolo.com',
	'*@ashsite.com',
	'*@atlantmail.com',
	'*@auto-rus.com',
	'*@azn.info',
	'*@babesspot.com',
	'*@baklanovtut.com',
	'*@bangerads.com',
	'*@barcoding-info.info',
	'*@basserer.info',
	'*@baycip.org',
	'*@be-adapted.info',
	'*@begato.info',
	'*@bekiso.info',
	'*@berahe.info',
	'*@best-finance.biz',
	'*@bestash.com',
	'*@bestautosearch.org',
	'*@bestboyfilms.org',
	'*@bestemailcontact.org',
	'*@bestfreemall.info',
	'*@bestguidedes.info',
	'*@besttradelink.info',
	'*@bet-bet.org',
	'*@bigfreemail.info',
	'*@bigmir.net',
	'*@bigvideosonline.com',
	'*@bitch2hole.info',
	'*@biz.by',
	'*@bk.ru',
	'*@blida.info',
	'*@blogopt.com',
	'*@bluebottle.com',
	'*@bmains.info',
	'*@bonbon.net',
	'*@boot.info',
	'*@boxtray.com',
	'*@brainyonline.info',
	'*@britneyspearsempire.com',
	'*@bubblesonline.info',
	'*@bumpymail.com',
	'*@burnacouplemore.com',
	'*@buy-cheap-cigarette.info',
	'*@buy-discount-cigarettes.info',
	'*@buy-replica-watches.com',
	'*@buyamoxicillin.org',
	'*@bxzo.com',
	'*@byethost7.com',
	'*@camefromblue.info',
	'*@canadianmedsdore.info',
	'*@caors.com',
	'*@care.com',
	'*@carrehab.org',
	'*@cashette.com',
	'*@cat-.info',
	'*@cat-22.info',
	'*@center-mail.de',
	'*@centermail.at',
	'*@centermail.ch',
	'*@centermail.com',
	'*@centermail.info',
	'*@centermail.net',
	'*@cheap available.info',
	'*@cheappill.info',
	'*@christmas-orgasms.info',
	'*@civilsrude.com',
	'*@clauser.info',
	'*@cnazn.info',
	'*@comet-pomet.info',
	'*@coolquality.info',
	'*@cresthomeloan.info',
	'*@crus.info',
	'*@cura-ut-valeas.info',
	'*@cute-boys.org',
	'*@cute-boys.orga.cc',
	'*@damost.info',
	'*@darkexpress.com',
	'*@datingservices.com',
	'*@dbacksmc.org',
	'*@dearhomeloan.info',
	'*@defender-mms.info',
	'*@deo-vindice.info',
	'*@deu10.byethost7.com',
	'*@deus-vult.info',
	'*@dfgr.info',
	'*@dfpijfpwiejf.org',
	'*@dic.blogopt.com',
	'*@diem-perdidi.info',
	'*@dildo-pleasure.info',
	'*@discardmail.com',
	'*@discardmail.de',
	'*@dkblog.org',
	'*@docpaulanderson.com',
	'*@dodgeit.com',
	'*@doh.com',
	'*@doh75.com',
	'*@domain*.com',
	'*@domain123.com',
	'*@domain168.com',
	'*@domain182.com',
	'*@domain237.com',
	'*@domain381.com',
	'*@domain852.com',
	'*@dontsendmespam.de',
	'*@dotfreeemail.org',
	'*@dqoj.com',
	'*@dredge-armature-loader.com',
	'*@drugsmarket.info',
	'*@dumpmail.de',
	'*@eaeewaqq.com',
	'*@ebony-18.com',
	'*@edel-star.biz',
	'*@email-me-letter.info',
	'*@emaildienst.de',
	'*@emailias.com',
	'*@emailto.de',
	'*@eosws.org',
	'*@eroti.info',
	'*@espmbua.com',
	'*@euro-investment.biz',
	'*@expertmovie.com',
	'*@ezigaretten.*',
	'*@fakeinformation.com',
	'*@fateback.com',
	'*@fatty.boom.ru',
	'*@fdaeg.ue',
	'*@fdapills.info',
	'*@fdjamail.com',
	'*@fdlkgfdss.com',
	'*@fdlojhgpwirhr.info',
	'*@fexk.com',
	'*@ffbizme.us',
	'*@fgjpejgpejqerg.info',
	'*@fhwrijhwreh.org',
	'*@filki.com',
	'*@filmania.org',
	'*@filmssdvd.com',
	'*@filmus.info',
	'*@fin-fin.biz',
	'*@finance-on-line.biz',
	'*@fjghjfgd.com',
	'*@fldojhwprhwp.info',
	'*@flghewegwopegh.org',
	'*@flush.info',
	'*@folprwnikomy.com',
	'*@formails.com',
	'*@fortnox.info',
	'*@forumru.com',
	'*@foryou.com',
	'*@foryou74.com',
	'*@foteret.info',
	'*@free-alta.info',
	'*@free-mail-service.info',
	'*@free.familybrutal.com',
	'*@freebestworld.com',
	'*@freeemailnow.info',
	'*@freefreemail.info',
	'*@freemail.besoft.org',
	'*@freemaildirect.com',
	'*@freemailservice.info',
	'*@freemedsite.org',
	'*@freemoviegroup.info',
	'*@freepochta.info',
	'*@freeservicemail.info',
	'*@freestuffo.com',
	'*@fromru.com',
	'*@front.org',
	'*@fuckshemale.net',
	'*@fwwv.com',
	'*@gala.net',
	'*@gamebox.net',
	'*@gawab.com',
	'*@genericpharmacydrug.com',
	'*@getfreeplus.com',
	'*@gettopdrug.info',
	'*@gewhiz.com',
	'*@gewhiz1.com',
	'*@gh20hg082h4g0.org',
	'*@ghazaei.com',
	'*@ghosttexter.de',
	'*@girlsfreewild.info',
	'*@girlsgoingmad.info',
	'*@girlsgonewildside.info',
	'*@gishpuppy.com',
	'*@giza.cc',
	'*@gj432jg-rrg.org',
	'*@globalsources.com',
	'*@gmail.ru',
	'*@go-japan.info',
	'*@goa-info.org',
	'*@gogophoto.com',
	'*@gold-profits.info',
	'*@good-realty.msk.su',
	'*@greatemailaddress.org',
	'*@greatmedsdiscount.info',
	'*@greatmoneynow.org',
	'*@greensloth.com',
	'*@grkq.com',
	'*@gvaq.com',
	'*@gxle.com',
	'*@healthrehab.org',
	'*@hiretin.info',
	'*@hispharm.info',
	'*@hnya.org',
	'*@hodoba.com',
	'*@holmih.com',
	'*@homeloancourse.info',
	'*@hot.ee',
	'*@hotpop.com',
	'*@housrehab.org',
	'*@hyper-info.com',
	'*@i.ua',
	'*@i8sex.info',
	'*@ikeyo.org',
	'*@iljy.com',
	'*@iloveandrus.com',
	'*@inbox.com',
	'*@inbox.lv',
	'*@inbox.ru',
	'*@incest-wonders.info',
	'*@indigo-mail.info',
	'*@infreeemail.org',
	'*@inmails.com',
	'*@instant-calling-card.com',
	'*@insurance.awardspace.us',
	'*@insurance.homeloancourse.info',
	'*@intop.com',
	'*@ipharmex.info',
	'*@itreal.info',
	'*@itua.info',
	'*@iyxv.info',
	'*@jetable.com',
	'*@jetable.net',
	'*@jetable.org',
	'*@jg-rjgrep.info',
	'*@jogox.org',
	'*@joresort.info',
	'*@justopt.info',
	'*@jvlj.com',
	'*@jvlo.com',
	'*@jvvl.com',
	'*@kasmail.com',
	'*@kcxu.com',
	'*@kefir. buy.com',
	'*@kenwrs.com',
	'*@kerasifo.info',
	'*@kidaf.ua',
	'*@kisenfad.com',
	'*@klassmaster.com',
	'*@kmqe.com',
	'*@kopcap.info',
	'*@kosheen-fans.info',
	'*@lamamiata.info',
	'*@learnmoreonline.net',
	'*@lgvb.com',
	'*@link mail.net',
	'*@lipitocanadianmeds.info',
	'*@list.ru',
	'*@lnqk.com',
	'*@lopigax.com',
	'*@loyallake.com',
	'*@lugarus.com',
	'*@luina.com',
	'*@lv.com',
	'*@m-s-n.net',
	'*@madtube.info',
	'*@mail.bg',
	'*@mail.com',
	'*@mail.ru',
	'*@mail.saratov.com',
	'*@mail15.com',
	'*@mail333.com',
	'*@mailblocks.com',
	'*@maileater.com',
	'*@mailexpire.com',
	'*@mailinator.com',
	'*@mailmoat.com',
	'*@mailnull.com',
	'*@mailshell.com',
	'*@mailsome.de',
	'*@mailzilla.com',
	'*@maixteka.info',
	'*@manus-manum-lavat.info',
	'*@marketingops.com',
	'*@mascara.ws',
	'*@master-ok.com',
	'*@master-se.com',
	'*@mbsesso.net',
	'*@mbsexo.net',
	'*@medafo.info',
	'*@meds10site.info',
	'*@mega-mail.info',
	'*@megasitedirect.org',
	'*@menja.net',
	'*@messagebeamer.de',
	'*@mike18-boy.ifrance.com',
	'*@milbrado.com',
	'*@minelab.ru',
	'*@mirenowredwd.com',
	'*@mixer.besoft.org',
	'*@mogesti.info',
	'*@molodec.info',
	'*@moo.com',
	'*@mozillafans.org',
	'*@mrs-florida-america.com',
	'*@msn.com',
	'*@mtmlcore.info',
	'*@mtzi.com',
	'*@my-aldebaran.info',
	'*@my-online-learning.info',
	'*@my-yep.com',
	'*@myeasyseek.info',
	'*@myloginmail.info',
	'*@mylove-mail.com',
	'*@mymail-in.net',
	'*@mynet.com',
	'*@mytrashmail.com',
	'*@myway.com',
	'*@nakedcamerondiaz.info',
	'*@ne-quid-nimis.info',
	'*@nencyalba.info',
	'*@neo-explode.org',
	'*@nerdshack.com',
	'*@nervmich.net',
	'*@nervtmich.net',
	'*@net-search.org',
	'*@net.gr',
	'*@netmails.net',
	'*@netzidiot.de',
	'*@ngyz.com',
	'*@nicolo-martin.de',
	'*@niggazzz.org',
	'*@nil-admirari.info',
	'*@ninoros.info',
	'*@nisiet.com',
	'*@nm.ru',
	'*@non-olet.info',
	'*@norivo.info',
	'*@nosce-te-ipsum.info',
	'*@nubiles-18.com',
	'*@nurfuerspam.de',
	'*@nysplace.com',
	'*@o.pl',
	'*@ofdjgpwrigp.info',
	'*@ofwehp0hg20hg.org',
	'*@onlinebestplenty.org',
	'*@onlinehoster.com',
	'*@onlymail2007.com',
	'*@oran.cc',
	'*@orderbuyonline.com',
	'*@ordiv.com',
	'*@orgnews.org',
	'*@orkq.com',
	'*@ovxe.com',
	'*@paraplandv.info',
	'*@paris-hilton-sucking.info',
	'*@pavian.org',
	'*@pbqn.com',
	'*@peugeot-club.org',
	'*@phentermine*',
	'*@phentermine1.info',
	'*@phentermineorder.boom.ru',
	'*@phpbbspam.org',
	'*@pillus.info',
	'*@pingmyhobbit.info',
	'*@pisem.net',
	'*@piwpihrewipreh.org',
	'*@pleasantphoto.com',
	'*@please-email-me.info',
	'*@pochta.ru',
	'*@pochta.ws',
	'*@pohpah.prophp.org',
	'*@poker.boom.ru',
	'*@pookmail.com',
	'*@pornobilder-mal-gratis.com',
	'*@pornoroxx.net',
	'*@portsaid.cc',
	'*@pptp-service.info',
	'*@privacy.net',
	'*@prjhgerjhperjh.info',
	'*@punkass.com',
	'*@putoncondoms.com',
	'*@qgfh.com',
	'*@qkmv.com',
	'*@qlfg.com',
	'*@qpyu.com',
	'*@quality-only.info',
	'*@qualityandsweet.info',
	'*@rambler.ru',
	'*@readnowgetpaid.com',
	'*@realresult.us',
	'*@realty.msk.su',
	'*@refinancce.biz',
	'*@rotover.info',
	'*@rpfhwrihwiruhw.org',
	'*@rpfhwrihwiruhw432.org',
	'*@rudedirect.com',
	'*@rugh92ughhgs.info',
	'*@runbox.com',
	'*@ruxv.com',
	'*@rxpw.com',
	'*@sahir.info',
	'*@salasdepoker.net',
	'*@samsonbllinded.com',
	'*@sanaa.cc',
	'*@sanna.cc',
	'*@sat.info',
	'*@savegame.info',
	'*@sdfs.com',
	'*@search-for-web.info',
	'*@searchroad.net',
	'*@security-hosting.net',
	'*@semoter.info',
	'*@servicefreemail.info',
	'*@sex-porn-video.pwkm.info',
	'*@sexisbliss.com',
	'*@seznam.cz',
	'*@shortmail.net',
	'*@shtut.info',
	'*@sibmail.com',
	'*@sims.com',
	'*@skorpmax.info',
	'*@sland.info',
	'*@smsmeetstv.com',
	'*@sneakemail.com',
	'*@sneakermail.com',
	'*@sofort-mail.de',
	'*@sogetthis.com',
	'*@sohwoh.com',
	'*@space.kz',
	'*@spam.la',
	'*@spambob.com',
	'*@spambob.net',
	'*@spambob.org',
	'*@spamday.com',
	'*@spamex.com',
	'*@spamgourmet.com',
	'*@spamhole.com',
	'*@spaminator.de',
	'*@spammotel.com',
	'*@spamoff.de',
	'*@spamtrail.com',
	'*@spivare.com',
	'*@sriaus.com',
	'*@statistics-fund.com',
	'*@strannik.name',
	'*@supermortgagerate.info',
	'*@svn-repository.info',
	'*@swrwiprjhwirjhp.org',
	'*@symbian-petting.info',
	'*@takoe.net',
	'*@tandemseries.info',
	'*@telegraf.by',
	'*@temet-nosce.info',
	'*@tempinbox.com',
	'*@temporarily.de',
	'*@temporaryinbox.com',
	'*@tempus-fugit.info',
	'*@test-my-email.info',
	'*@thatsthegame.com',
	'*@thebestweb.info',
	'*@thecannabishunter.com',
	'*@thecigarettes.info',
	'*@thedrugmarket.com',
	'*@theemailaddresses.org',
	'*@theemailcontact.org',
	'*@thefunnyvids.org',
	'*@tlen.pl',
	'*@toghraee.com',
	'*@topadult.info',
	'*@topsearchnet.info',
	'*@topvideogalerz.info',
	'*@trade-soft.biz',
	'*@tradedoubling.co.uk',
	'*@traffsale.com',
	'*@tramadol-inka.info',
	'*@tramadolfromhell.com',
	'*@trash-mail.de',
	'*@trashmail.net',
	'*@trax.yourpiu.info',
	'*@tut.by',
	'*@twinmail.de',
	'*@ua.fm',
	'*@uaqw.com',
	'*@uaxc.com',
	'*@ubkq.com',
	'*@uefa-germany.org',
	'*@uixj.com',
	'*@ujkp.com',
	'*@ukr.net',
	'*@ultimate-svn.info',
	'*@ultram.org',
	'*@underwhatwhat.info',
	'*@url.com',
	'*@urlor.com',
	'*@usadaytrade.biz',
	'*@usermail.com',
	'*@uwkd.com',
	'*@uxwp.com',
	'*@vcej.com',
	'*@vhzn.com',
	'*@virtualrxenc.info',
	'*@visit-it.info',
	'*@vjst.com',
	'*@vjyj.com',
	'*@vkhe.com',
	'*@vmxc.com',
	'*@voltaren.org',
	'*@vpql.com',
	'*@vpspt.info',
	'*@vqfy.com',
	'*@vrlq.com',
	'*@vrzi.com',
	'*@vxaz.com',
	'*@vztl.com',
	'*@vzxi.com',
	'*@walla.com',
	'*@warhammerwiki.com',
	'*@wasphawk.ru',
	'*@weare.com',
	'*@web-browser.info',
	'*@web.de',
	'*@wegwerfadresse.de',
	'*@willhackforfood.biz',
	'*@winantivirus.info',
	'*@winrock.org.md',
	'*@wjvd.com',
	'*@wprihwpihwrhwpir.org',
	'*@wuqs.com',
	'*@wuzup.net',
	'*@www.freewebs.com',
	'*@www.hot.ee',
	'*@wwwfreemail.info',
	'*@xbox-gammers.info',
	'*@xdta.com',
	'*@xents.com',
	'*@xgix.com',
	'*@xkje.com',
	'*@xm.biz',
	'*@xoxma.net',
	'*@xqce.com',
	'*@xtopsearch.info',
	'*@xwpi.com',
	'*@yandex.ru',
	'*@ybbs.info',
	'*@yfzv.com',
	'*@yoblog.info',
	'*@youpharm.info',
	'*@youraces.info',
	'*@youremailsoftware.org',
	'*@yourfreehost.info',
	'*@yqli.com',
	'*@yufz.com',
	'*@yvpb.com',
	'*@yvyl.com',
	'*@yxclub.info',
	'*@z2sex.info',
	'*@z3sex.info',
	'*@zakarpatie.com.ua',
	'*@zeebede.com',
	'*@zffk.com',
	'*@znahov.org',
	'*@zoemail.com',
	'*@zpsv.com',
	'*@zqwe.com',
	'*@zyll.net',
	'*alt-email-host.info',
	'*siyf.info',
	'3axep@hotpop.com',
	'amazing-videos.info',
	'analsexpro@vfemail.net',
	'asapich@i.ua',
	'babycop@neo-explode.org',
	'bezdelnikusa@mymail-in.net',
	'bmw3s@realresult.us',
	'chubchub76@mail.ru',
	'cjfkjf@i.ua',
	'creamworld@poczta.onet.pl',
	'datingfree@ukr.net',
	'dengizlo@hotbox.ru',
	'dertinov5@gawab.com',
	'diamtcom@diamonddatinglist.com',
	'dijonreid@hotmail.com',
	'door@peugeot-club.org',
	'dvtriodin@tut.by',
	'eeananejoer03@indigo-mail.info',
	'erla1@defender-mms.info',
	'fdfggg@i.ua',
	'feaz@i.ua',
	'fedorikolo@web.de',
	'fertassa@mail.ru',
	'ffg@bmains.info',
	'fgdsfgh@i.ua',
	'fgnfgbn@phpbbspam.org',
	'funy@email-me-letter.info',
	'gaffar.lyahnicki@mail.ru',
	'gdfgw@i.ua',
	'giovani6@o2.pl',
	'giovani6@tlen.pl',
	'gono5456v89@mail.ru',
	'gudrio@bxzo.com',
	'hdqrbuy@hotmail.com',
	'hertune@mail.ru',
	'heruvixert@mymail-in.net',
	'hsag675gj7s@mail.ru',
	'kazaryan_nadar@mail.ru',
	'kytreno@safebox.ru',
	'langelo@i.ua',
	'login@gawab.com ',
	'michaelxp@insurance.awardspace.us',
	'miobica@vpspt.info',
	'netga@xwpi.com',
	'notsniw2@bigmir.net',
	'onlinekasino888@hotpop.com',
	'Ootepmarjalem56@alternative-email-service.info',
	'ozirbojanr@mail.ru',
	'pogonilo@mail.ru',
	'radomir_ryashenk@mail.ru',
	'riddikjan@mail.ru',
	'shevtchuk2007x@ya.ru',
	'skuarlytronald@mail.com',
	'sorogromm@me.by',
	'spoon@alt-email-host.info',
	'ssak8@bk.ru',
	'ssilkirap17@mail.ru',
	'stepanenko.egor@mail.ru',
	'Stik@underwhatwhat.info',
	'titelwey@mail.ru',
	'tolon@bk.ru',
	'tolon_72@list.ru',
	'tramadolkanote@mail.ru',
	'TransMasterBeat@ya.ru',
	'tratata321@yahoo.com',
	'violet11011@citiz.net',
	'voros654f6@mail.ru',
	'xazuj@hodoba.com',
	'yarzutswa@mail.ru',
	'yvxvramk@myloginmail.info',
	'zenyt87@yahoo.com',
);

$ct_userspm_def = array(
	'funtklakow',
	'jtfoe1974',
	'unmmyns',
	'coldsorin',
	'fairlande',
	'largepafilis',
	'pirsrv',
	'sadlatour',
	'bighor-lam',
	'greatfintan',
	'budowa_cepa',
	'cepelin',
	'yuriyhoy',
	'printerxp',
	'kololos',
);

?>