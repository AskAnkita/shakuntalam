<template>
    <main id="main">
        <section id="services" class="services section-bg bg-gradient-to-r from-cyan-500 to-blue-500">
            <!--            <header id="header" class="h-20 flex justify-content-between">-->
            <!--                <div class="cursor-pointer">-->
            <!--                    <router-link :to="{name: 'dashboard'}">-->
            <!--                        <img src="/images/Web.png" class="h-3/4	">-->
            <!--                    </router-link>-->
            <!--                </div>-->
            <!--                <router-link :to="{name: 'service'}">-->
            <!--                    <svg class="w-8 h-8 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>-->
            <!--                </router-link>-->
            <!--            </header>-->
            <div class="row flex justify-center ">
                <div class="section-title parent-container w-full md:w-full lg:w-9/12 min-h-screen">
                    <h2 class="text-white">SERVICE AGREEMENT</h2>
                    <div class="flex justify-center">
                        <div class="flex items-center mr-4 position-relative">
                            <input checked id="inline-checked-radio" type="radio" value="" name="inline-radio-group"
                                   @click="languageChangeEng">
                            <label for="inline-checked-radio"
                                   class="ml-2 text-sm font-medium text-white dark:text-white">English</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                                   @click="languageChangeHindi">
                            <label for="inline-2-radio"
                                   class="ml-2 text-sm font-medium text-white dark:text-white">Hindi</label>
                        </div>
                    </div>
                    <div class="row sub-container w-full md:w-10/12 h-2/3" v-if="english">
                        <div class="col-xl-12 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box  border-2 border-gray-300">
                                <p class="text-center">
                                    This Agreement is made and entered into at Amethi, Uttar Pradesh on 2ND day of
                                    December, 2022.<br>
                                    <b>BY AND BETWEEN</b>
                                </p>
                                <p class="text-left">
                                    <br>
                                    SHAKUNTALAM INFOSOLUTIONS (REGISTRATION NO.: UDYAM-UP-50-0007616F), a
                                    proprietorship concern having its office at Dadra Road, After Railway Crossing,
                                    Near – Ashish Gas Agency, Musafirkhana, Amethi - 227813 hereinafter referred to as
                                    “SHAKUNTALAM INFOSOLUTIONS” or “Client” (which expression shall unless repugnant to
                                    the
                                    context or meaning thereof shall mean and include its successors and permitted
                                    assigns) of the ONE PART
                                    <br>
                                <p class="text-center">
                                    <b>AND</b>
                                </p>
                                <p class="text-left">
                                    --------------- a PERSON having it’s residence Durgapur Kharba Gopalpur,Kharba
                                    Maldah, West Bengal-732150 hereinafter referred to as the --------------- which
                                    expression shall, unless it be repugnant to the context or meaning thereof, mean and
                                    include its partners, successors and permitted assignees} PARTY OF OTHER PART.
                                    <br>
                                    “SHAKUNTALAM INFOSOLUTIONS” and “---------------” wherever the context so requires
                                    be hereinafter individually referred to as a “Party” and collectively referred to as
                                    the “Parties”.<br><br><br>
                                    NOW THIS AGREEMENT WITNESSETH AND THE PARTIES HERETO AGREES AS FOLLOWS:<br><br>

                                    <b> 1. DEFINITIONS AND INTERPRETATIONS:</b><br><br>

                                    <span class="ml-4">
                                    a. “Agreement” means this Agreement, all annexures to this Agreement, provided by
                                    SHAKUNTALAM INFOSOLUTIONS from time to time as the same may be supplemented,
                                    amended, restated or replaced from time to time in accordance with the provisions of
                                    this Agreement.<br><br>

                                    b. “Annexure” means annexure attached to this Agreement and issued by SHAKUNTALAM
                                    INFOSOLUTIONS from time to time which shall form integral part of this
                                    Agreement.<br><br>

                                    c. “SHAKUNTALAM INFOSOLUTIONS Employee” shall mean any person/individual who shall
                                    be duly appointed by SHAKUNTALAM INFOSOLUTIONS for different offices/branches/
                                    locations allover India and who is on the payroll of SHAKUNTALAM
                                    INFOSOLUTIONS.<br><br>

                                    d. “Commencement Date” shall mean the date from which the Real Time Accounting
                                    Services(Services as defined in SOW) operations shall commence and shall be
                                    considered as deemed to be effective from 5TH DECEMBER 2022 TO 4TH DECEMBER
                                    2023.<br><br>

                                    e. “Data” shall mean all documents including but not limited to SHAKUNTALAM
                                    INFOSOLUTIONS employees records, files, materials and other information in physical
                                    form, electronic form or any other form, as communicated and provided to Mr.
                                    --------------- by SHAKUNTALAM INFOSOLUTIONS in its sole discretion, pursuant to
                                    this Agreement.<br><br>

                                    f. “Deliverable” shall mean the documents as mentioned in the Scope of Work
                                    (SOW).<br><br>

                                    g. "Services” shall mean all tasks and other activities performed by SHAKUNTALAM
                                    INFOSOLUTIONS under this Agreement and as defined in the SOW (subject to the
                                    modifications which may be undertaken from time to time, with consent of the
                                    Parties).<br><br>

                                    h. “Scope of Work/SOW” specifies a detailed process including functional processes,
                                    time lines, input formats, deliverables, output report formats, other functional
                                    requirements, user characteristics and the assumptions, duly confirmed by
                                    SHAKUNTALAM INFOSOLUTIONS and by Mr. ---------------, which is annexed as Part A to
                                    this Agreement.<br><br>

                                    i. “Termination date” means the date on which this Agreement gets terminated (for
                                    whatsoever reasons).<br><br>
                                </span>
                                    <b> 2. SCOPE OF SERVICES:</b><br><br>
                                    <span class="ml-4">
                                        2.1 SHAKUNTALAM INFOSOLUTIONS shall provide the Services to --------------- as per the
                                        Scope of Work (SOW), which is strictly subjected and limited to “Accounting and Book
                                        Keeping Services for demat account”. Company will not provide any type of tips and
                                        advice related to share market, services will be only limited to monitoring demat
                                        account and giving real time information of market to customer.<br><br>

                                        2.2 The Services provided by the SHAKUNTALAM INFOSOLUTIONS shall meet the requirements
                                        of --------------- under this Agreement.<br><br>
                                    </span>
                                    <b> 3. TERM:</b><br><br>
                                    <span class="ml-4">
                                        • This Agreement shall be in force for a period commencing from 5TH DECEMBER 2022 till
                                        4TH DECEMBER 2023 unless otherwise determined in accordance with the provisions of this
                                        Agreement.<br><br>

                                        • The Agreement may however be renewed for such further period at the discretion of
                                        SHAKUNTALAM INFOSOLUTIONS, after efflux of time mentioned above.<br><br>
                                    </span>

                                    <b>4. DETERMINATION OF SERVICE CHARGE:</b><br><br>
                                    <span class="ml-4">
                                        4.1 In consideration of the Services, --------------- shall pay to SHAKUNTALAM
                                        INFOSOLUTIONS a fixed fee of Rs. 3,995/- (Rupees Three Thousand Nine Hundred Ninty Five
                                        Only) + TAXES per month or Rs. 999/- (Rupees Nine Hundred Ninty Nine Only) + TAXES per
                                        week [Strike-off whichever is not applicable]towards the service provided for real time
                                        accounting services in relation to the investments made in shares, securities etc. to
                                        the Individual.<br><br>

                                        4.2 The expenses towards statutory records, statutory displays, statutory fees, other
                                        statutory payments and postal expenditure and applicable taxes shall be borne by the
                                        Individual, subject to production of supporting documents.<br><br>
                                    </span>
                                    <b>5. PAYMENT TERMS:</b><br><br>
                                    <span class="ml-4">
                                        5.1 Invoices:<br><br>
                                        <span class="ml-4">
                                            a) SHAKUNTALAM INFOSOLUTIONS shall raise an invoice from time to time for services
                                            rendered and --------------- shall pay/clear the bills within 5 days of the receipt of
                                            the same provided the contents of the invoice are in order/correct and in accordance
                                            with the terms and conditions agreed herein.<br><br>

                                            b) In case there is any dispute regarding the Invoice amount, --------------- agrees to
                                            intimate the same within 2 days of submission of Invoice. Both the parties hereby agree
                                            to resolve the dispute within 7 days of intimation of dispute to ---------------. In
                                            case there is any inadvertent error or miscalculation in the invoice, the same shall be
                                            brought to the notice of other party and any rectification or payment shall be given
                                            effect to in the invoice subsequent to the realization of such error by the affected
                                            party.<br><br>
                                        </span>
                                        5.2 It is further agreed between the parties hereto that, if there is any change in
                                        Scope of Work, the service charges payable to SHAKUNTALAM INFOSOLUTIONS shall be revised
                                        in writing by the Parties with the prior consent of both of them.<br><br>

                                        5.3 All payments/ charges under this Agreement are subject to deduction of tax at source
                                        as per the provisions of the Income-tax Act, 1961 and any other provisions as applicable
                                        from time to time.<br><br>
                                    </span>
                                    <b> 6. OBLIGATIONS:</b><br><br>
                                    <span class="ml-4">
                                        6.1 For the purpose of rendering services to the ---------------, SHAKUNTALAM
                                        INFOSOLUTIONS may tie-up with any third-party and/ or appoint any contractor/
                                        sub-contractor as it may deem fit. However, it is clarified that such third-party or
                                        contractor/ sub-contractor shall be bound by same terms and conditions as specified
                                        for
                                        SHAKUNTALAM INFOSOLUTIONS under this Agreement.<br><br>

                                        6.2 In order for SHAKUNTALAM INFOSOLUTIONS to render Services as per the terms of
                                        this
                                        Agreement, --------------- shall furnish SHAKUNTALAM INFOSOLUTIONS with all the
                                        necessary data, material and information on a ‘need to know basis’ for enabling
                                        SHAKUNTALAM INFOSOLUTIONS to discharge their functions for the above said purpose,
                                        within the time frame specified in the SOW.<br><br>

                                        6.3 SHAKUNTALAM INFOSOLUTIONS shall inter alia provide the following to
                                        ---------------.<br><br>

                                        • Nominate a single point of contact<br><br>
                                        • Provide business rules as applicable for rendering the services from time to time.<br><br>
                                        • Monthly inputs for providing services within agreed time limits as defined in the
                                        SOW.<br><br>
                                        • Such other relevant data/ information necessary for processing / delivery.<br><br>

                                        6.4 All documentation owned by SHAKUNTALAM INFOSOLUTIONS shall remain the property
                                        of<br><br>
                                        SHAKUNTALAM INFOSOLUTIONS including, without limitation, all modifications,
                                        enhancements, improvements and translations made to it by any party.<br><br>
                                    </span>

                                    <b> 7. TERMINATION:</b><br><br>
                                    <span class="ml-4">
                                    7.1 This Agreement can be terminated upon the mutual consent of both the parties.<br><br>

                                    7.2 In the event of either Party committing breach of the terms and conditions of
                                    this
                                    Agreement, the other Party shall give 15 days’ notice to the Party committing breach
                                    to
                                    rectify the breach. If the breach is not rectified by the Party committing the
                                    breach
                                    within 30 days of the receipt of the notice, the Agreement shall be treated as
                                    terminated on expiry of the said 30 days.<br><br>

                                    </span>
                                    <b> 8. CONSEQUENCES OF TERMINATION:</b>
                                    <span class="ml-4">
                                    8.1 Upon termination of this Agreement:<br><br>

                                    (a) --------------- shall quit and remove itself and its employees, agents, and
                                    representatives and belongings, if any from SHAKUNTALAM INFOSOLUTIONS premises.<br><br>

                                    (b) SHAKUNTALAM INFOSOLUTIONS shall return all belongings of --------------- if any,
                                    procured during the course of work.<br><br>

                                    (c) Each party shall make payment of all sums lawfully owned by it to the other
                                    party
                                    within one month of termination which was rightfully due prior to such termination.<br><br>

                                    8.2 The expiration or termination of this Agreement shall be without prejudice to
                                    the
                                    accrued rights and obligations of the parties and all such accrued rights and
                                    obligations shall remain in full force and effect and enforceable not withstanding
                                    such
                                    expiry or termination.<br><br>

                                    </span>
                                    <b>9. CONFIDENTIALITY:</b><br><br>
                                    <span class="ml-4">
                                    The party of second part i.e. --------------- (Receiving Party) hereby agrees<br><br>

                                    (i) to hold the SHAKUNTALAM INFOSOLUTIONS (the “Disclosing Party”) Confidential
                                    Information in strict confidence and to take reasonable precautions to protect such
                                    Confidential Information (including, without limitation, all precautions the
                                    Receiving
                                    Party employs with respect to its own confidential materials),<br><br>

                                    (ii) not to divulge any such Confidential Information or any information derived
                                    therefrom to any third person;<br><br>

                                    (iii) not to make any use whatsoever at any time of such Confidential Information
                                    except
                                    as contemplated hereunder.<br><br>

                                    (iv) not to copy or reverse engineer any such Confidential Information, and<br><br>

                                    (v) that any employee, subcontractor, or agent given access to any such Confidential
                                    Information must have a legitimate “need to know” and shall be bound in writing to
                                    comply with the Receiving Party’s confidentiality obligations, whether generally or
                                    specific to this Agreement.<br><br>
                                    </span>

                                    <b>10. FORCE MAJEURE:</b><br><br>
                                    <span class="ml-4">
                                    10.1 Neither Party shall incur any liability to the other party on account of any
                                    loss
                                    or damage resulting from any delay or failure to perform all or any part of this
                                    Agreement if such delay or failure is caused, in whole or in apart, by events,
                                    occurrences or forces beyond the reasonable control and without the negligence of
                                    such
                                    party (hereinafter referred to as a “Force Majeure Event”).<br><br>

                                    10.2 ‘Force Majeure Event’ means an occurrence beyond the control and without fault
                                    or
                                    negligence of party affected and occurring after the commencement of this Agreement
                                    including but not limited to Acts of God or the Public enemy, expropriation or
                                    confiscation of facilities, war (declared or not), rebellion, sabotage or riots,
                                    floods
                                    fires, explosions, or other catastrophes.<br><br>

                                    10.3 The party wishing to claim relief shall notify the other party in writing
                                    within 24
                                    working hours of such occurrence and upon such notice, either party to this
                                    Agreement
                                    shall be absolved of its responsibilities under this Agreement be excused for any
                                    Force
                                    Majeure Event.<br><br>

                                    </span>

                                    <b>11. AMENDMENTS TO AGREEMENT:</b><br><br>
                                    This Agreement can be modified with the consent of and after mutual discussions
                                    between
                                    the parties hereto only by a written instrument properly executed by duly authorized
                                    representatives of the respective parties.<br><br>


                                    <b>12. DISPUTE RESOLUTION:</b><br><br>

                                    If any dispute or difference of opinion arises between the parties in relation to or
                                    in
                                    connection with this agreement, the parties shall undertake negotiations in good
                                    faith
                                    with a view to resolving the matter. If, notwithstanding negotiations by and between
                                    the
                                    parties the dispute or difference of opinion is not resolved, either party may refer
                                    the
                                    dispute, to Arbitration conducted by a mutually appointed sole arbitrator as per the
                                    provisions of the Arbitration and Conciliation Act, 1996. The award of the
                                    arbitrator
                                    shall be binding on the parties. The place of arbitration shall be at Amethi, Uttar
                                    Pradesh and the language for the purpose of such proceedings shall be English.


                                    <b> 13. JURISDICTION:</b><br><br>

                                    This Agreement shall be governed and interpreted by and construed in accordance with
                                    the
                                    Laws of India, and shall be subject to exclusive jurisdiction of competent Courts at
                                    Uttar Pradesh only over all matters arising out of or relating to this Agreement.
                                    IN WITNESS WHERE OF the parties hereto have set their respective signatures on the
                                    day,
                                    date and year first herein above written.

                                    Signed and Delivered by the within named

                                    M/s. SHAKUNTALAM INFOSOLUTIONS<br>
                                    By its Authorized Signatory<br>
                                    Mr. AJEET DUBEY<br>
                                    Signed, and Delivered by the within named<br>
                                    Mr. ---------------<br>
                                    Mr<br>
                                    Scope of Work<br>
                                    It is understood by the parties that the Mr. --------------- is an active
                                    participant in
                                    financial markets and holds inter-alia a demat account. Further, the Mr.
                                    ---------------
                                    is interested in dealing and/ or already makes investments made in shares,
                                    securities
                                    etc.<br>

                                    On the other hand, SHAKUNTALAM INFOSOLUTIONS has a proper functional set-up
                                    including
                                    office space, computers, accounting software and employees that are well-versed with
                                    computers and related accounting softwares. SHAKUNTALAM INFOSOLUTIONS is already in
                                    the
                                    business of rendering computer related services to its clients.<br>

                                    Mr. --------------- been a regular investor, has reached out to SHAKUNTALAM
                                    INFOSOLUTIONS to provide real-time accounting services for the transactions
                                    undertaken
                                    and/ or investments made in shares, securities etc.In this background, SHAKUNTALAM
                                    INFOSOLUTIONS shall render following services to Mr. ---------------.<br>

                                    • SHAKUNTALAM INFOSOLUTIONS shall leverage the assets/ capabilities available with
                                    it
                                    and provide real-time accounting services which shall inter-alia include recording
                                    of
                                    all purchase and sale transactions whether undertaken in shares, securities etc.<br>

                                    • Provide real-time updates on the financial position to the Mr. --------------- on
                                    undertaking any purchase/ sale transactions.<br>

                                    • Maintain complete records in relation to all purchase and sale transactions
                                    undertaken
                                    by the Mr. --------------- during the course of this Agreement<br>

                                    • Share daily, weekly, monthly reports with the Mr. --------------- showing summary
                                    of
                                    all the transactions undertaken during such period and the net financial position<br>

                                    • Intimating the Mr. --------------- in case any limits set by him for trading are
                                    reached (for example, if an Mr. --------------- has set a limit of Rs. 10,000 as
                                    daily
                                    trading limit, then SHAKUNTALAM INFOSOLUTIONS will intimate him once such limit is
                                    reached for the day).<br>

                                    • Such other related services as may be required for proper rendition of aforesaid
                                    services and/ or as may be agreed by the parties<br>

                                    Note –All the decision relating to a transaction to be undertaken including purchase
                                    and<br>
                                    sale of shares, securities etc. shall be the sole responsibility of the Mr.
                                    --------------- and SHAKUNTALAM INFOSOLUTIONS’s responsibility and services would be
                                    only to provide real-time accounting services in relation to such transactions
                                    undertaken by the Mr. ---------------. However, the Mr. --------------- would be
                                    required to share all shares/ securities etc. purchase and sale related information
                                    on
                                    asap basis with SHAKUNTALAM INFOSOLUTIONS.
                                </p>
                            </div><br>
                        </div>
                    </div>
                    <div class="row sub-container w-full md:w-10/12 h-2/3" v-if="hindi">
                        <div class="col-xl-12 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box  border-2 border-gray-300">
                                <p class="text-center">
                                    सेवा अनुबंध
                                </p><br>
                                <p class="text-left">
                                    यह समझौता 2 दिसंबर, 2022 को अमेठी, उत्तर प्रदेश में किया गया और क़रार पाया।
                                    शकुंतलम इंफोसोल्यूशंस (पंजीकरण संख्या: उद्यम-यूपी-50-0007616एफ), एक स्वामित्व वाली
                                    कंपनी जिसका
                                    कार्यालय दादरा रोड, रेलवे क्रॉसिंग के पास, आशीष गैस एजेंसी के पास, मुसाफिरखाना,
                                    अमेठी - 227813 में है,
                                    एतदोपरांत इसे "शकुंतलम इन्फोसोल्यूशंस" या "क्लाइंट" (इस अभिव्यक्ति में, संदर्भ या
                                    उसके अर्थ के प्रतिकूल होने तक
                                    इसके उत्तराधिकारी और अनुमत समनुदेशिती शामिल होंगे); --- एक भाग<br>
                                <p class="text-left"> द्वारा एवं </p>
                                wae एक व्यक्ति जिसका निवास दुर्गापुर खरबा गोपालपुर, खरबा मालदह, पश्चिम बंगाल - 732150
                                है, जिसे
                                एतदोपरांत -------------- “ कहा जाएगा (इस अभिव्यक्ति में, संदर्भ या उसके अर्थ के प्रतिकूल
                                होने तक इसका अर्थ होगा
                                और इसमें उसके भागीदार, उत्तराधिकारी और अनुमत समनुदेशिती शामिल होंगे) अन्य भाग का पक्ष।
                                "शकुंतलम इन्फोसोल्यूशंस" और "-------------- " जहां भी संदर्भ की आवश्यकता है, एतदोपरांत
                                व्यक्तिगत रूप से "पक्ष"
                                के रूप में संदर्भित किया जाएगा और सम्मिलित रूप से "पक्षों" के रूप में संदर्भित किया
                                जाएगा।
                                <p class="text-left"> के मध्य </p>
                                अब यह अनुबंध गवाह है और इसके पक्ष निम्नानुसार सहमत हैं:
                                1. परिभाषाएँ और व्याख्या:
                                क्‌. "अनुबंध" का अर्थ है यह अनुबंध, जो समय-समय पर शाकुंतलम इंफोसोल्यूशंस द्वारा प्रदान
                                किया गया है, और
                                इस अनुबंध के प्रावधानों के अनुरूप इस अनुबंध में समय-समय पर अनुलग्रक, पूरक, संशोधन,
                                पुनर्कथन या
                                प्रतिस्थापना की जाए।
                                "अनुलग्रक" का अर्थ है इस समझौते से जुड़ा हुआ और समय-समय पर शकुंतलम इन्फोसॉल्यूशंस द्वारा
                                जारी
                                किया गया अनुबंध जो इस समझौते का अभिन्न अंग होगा।
                                "शकुंतलम इंफोसोल्यूशंस कर्मचारी" का अर्थ ऐसे किसी भी व्यक्ति / शख़्स से होगा, जिसे पूरे
                                भारत में विभिन्न
                                कार्यालयों / शाखाओं / स्थानों के लिए शकुंतलम इन्फोसोल्यूशंस द्वारा विधिवत नियुक्त किया
                                गया है, और जो
                                शकुंतलम इन्फोसोल्यूशंस से वेतन प्राप्त करता है।
                                "प्रारंभ तिथि" का अर्थ उस तिथि से होगा जिससे रीयल टाइम अकाउंटिंग सर्विसेज (एसओडब्ल्यू
                                में परिभाषित
                                सेवाएं) का संचालन शुरू होगा और इसे 5 दिसंबर 2022 से 4 दिसंबर 2023 तक प्रभावी माना जाएगा।
                                "डेटा" का अर्थ उन सभी दस्तावेजों से होगा, जिसमें शकुंतलम इंफोसोल्यूशंस के कर्मचारियों के
                                रिकॉर्ड, फाइलें,
                                सामग्री और अन्य जानकारी भौतिक रूप, इलेक्ट्रॉनिक रूप या किसी अन्य रूप में शामिल है, लेकिन
                                इन्हीं तक
                                सीमित नहीं है, जैसा कि श्री __ को इस समझौते के अनुसार शाकुंतलम इन्फोसोल्यूशंस द्वारा
                                अपने
                                विवेकाधिकार में, सूचित किया गया है और प्रदान किया गया है।
                                " डिलिवरेबल्स" का अर्थ कार्य के दायरे (एसओडबल्यू) में उल्लिखित दस्तावेजों से होगा।
                                "सेवाओं" का अर्थ इस अनुबंध के तहत शकुंतलम इंफोसोल्यूशंस द्वारा किए गए सभी कार्यों और
                                अन्य
                                गतिविधियों से होगा और जैसा कि एसओडब्ल्यू में परिभाषित किया गया है (संशोधनों के अधीन, जो
                                पार्टियों
                                की सहमति से समय-समय पर किए जा सकते हैं)।
                                "कार्यक्षेत्र।एसओडब्ल्यू" एक विस्तृत प्रक्रिया को निर्दिष्ट करता है जिसमें कार्यात्मक
                                प्रक्रियाएं, समय रेखाएं,
                                इनपुट प्रारूप, डिलिवरेबल्स, आउटपुट रिपोर्ट प्रारूप, अन्य कार्यात्मक आवश्यकताएं,
                                उपयोगकर्ता विशेषताएं
                                और धारणाएं शामिल हैं, जिसकी विधिवत पृष्टि शाकुंतलम इंफोसोल्यूशंस और श्री -----------
                                द्वारा की गई है।
                                naa , जो इस समझौते के भाग ए के रूप में संलग्न है।
                                "समाप्ति तिथि" का अर्थ वह तिथि है जिस पर यह अनुबंध समाप्त हो जाएगा (किसी भी कारण से)।
                                सेवाओं का दायरा:
                                2.1
                                4.1
                                4.2
                                शाकुंतलम इन्फोसोल्यूशंस कार्यक्षेत्र (एसओडब्ल्यू) के अनुसार --------++-+- को सेवाएं
                                प्रदान करेगा, जो "डीमैट
                                खाते के लिए लेखांकन और बहीखाता सेवाएं" के अधीन और इस तक सीमित है। कंपनी शेयर बाजार से
                                संबंधित
                                किसी भी प्रकार का संकेत और सलाह नहीं देगी, सेवाएं केवल डीमैट खाते की निगरानी और ग्राहक
                                को बाजार
                                की वास्तविक अद्यतन जानकारी देने तक सीमित रहेंगी।
                                शाकुंतलम इन्फोसोल्यूशंस द्वारा प्रदान की जाने वाली सेवाएं इस अनुबंध के तहत ऋत+ की
                                आवश्यकताओं को पूरा करेंगी।
                                कार्यकाल:
                                *» यह अनुबंध 5 दिसंबर 2022 से शुरू होकर 4 दिसंबर 2023 तक की अवधि के लिए लागू रहेगा, जब
                                तक
                                कि इस समझौते के प्रावधानों के अनुसार अन्यथा तय नहीं कर दिया जाता।
                                * हालांकि ऊपर उपरिलिखित समयावधि समाप्त होने के बाद, शाकुंतलम इन्फोसॉल्यूशंस के विवेक पर
                                इस
                                तरह की और अवधि के लिए समझौते का नवीनीकरण किया जा सकता है।
                                सेवा शुल्क तय करना:
                                प्रदान की गयी सेवाओं के बदले में, -------------- शकुंतलम इन्फोसोल्यूशंस को व्यक्ति को
                                शेयरों, प्रतिभूतियों
                                आदि में किए गए निवेश के संबंध में वास्तविक समय लेखा सेवाओं के लिए प्रदान की गई सेवा की
                                मद में रुपये
                                3,995/- (तीन हजार नौ सौ पंचानबे रुपये मात्र) + कर प्रति माह का एक निश्चित शुल्क या रु.
                                999/- (नौ सौ
                                निन्‍्यानबे रुपये मात्र) + कर प्रति सप्ताह [जो लागू नहीं है, उसे काट दें] का भुगतान
                                करेगा।
                                वैधानिक रिकॉर्ड, वैधानिक प्रदर्शन, वैधानिक शुल्क, अन्य वैधानिक भुगतान और डाक व्यय और
                                लागू करों पर
                                खर्च की गयी धनराशि का भुगतान संबन्धित दस्तावेजों के उपलब्ध कराये पर, संबन्धित व्यक्ति को
                                करना होगा।
                                भुगतान शर्तें:
                                5.1
                                5.2
                                5.3
                                6.1
                                6.2
                                चालान पत्रकः
                                क. शाकुंतलम इन्फोसॉल्यूशन्स प्रदान की गई सेवाओं के लिए समय-समय पर एक चालान जारी करेगा और
                                -
                                a बिलों की प्राप्ति के 5 दिनों के भीतर भुगतान / समाशोधन करेगा, बशर्ते सामग्री चालान का
                                ब्योरा सही/शुद्ध है और इस अनुबंध के नियमों और शर्तों के अनुरूप है।
                                ख. यदि चालान राशि के संबंध में कोई विवाद है, तो --------+--+ चालान जमा करने के 2 दिनों
                                के भीतर
                                सूचित करने पर सहमत हैं। एतदद्वारा दोनों पक्ष -------------- को विवाद की सूचना के 7 दिनों
                                के भीतर
                                विवाद को हल करने के लिए सहमत हैं। यदि चालान में असावधानीवश कोई त्रुटि या गलत गणना है, तो
                                इसे दूसरे पक्ष के ध्यान में लाया जाएगा और प्रभावित पक्ष द्वारा ऐसी त्रुटि का एहसास होने
                                के बाद किसी
                                भी सुधार या भुगतान को चालान में शामिल किया जाएगा।
                                पक्षों के बीच आगे इस बात पर भी सहमति है कि, यदि कार्य के दायरे में कोई परिवर्तन होता है,
                                तो शकुंतलम
                                इन्फोसोल्यूशंस को देय सेवा शुल्क दोनों पक्षों की पूर्व सहमति से लिखित रूप में संशोधित
                                किए जाएंगे।
                                इस अनुबंध के तहत सभी भुगतान/प्रभार आयकर अधिनियम, 1961 के प्रावधानों और समय-समय पर लागू
                                अन्य प्रावधानों के अनुसार स्रोत पर कर कटौती के अधीन हैं।
                                दायित्व:
                                6.1 ------------ को सेवाएं प्रदान करने के उद्देश्य से, शकुंतलम इन्फोसोल्यूशंस, जैसा वह
                                उपयुक्त समझे
                                किसी भी तीसरे पक्ष के साथ टाई-अप कर सकता है और/या किसी भी ठेकेदार/उप-ठेकेदार को नियुक्त
                                कर सकता
                                है | हालांकि, यह स्पष्ट किया जाता है कि इस तरह के तीसरे पक्ष या ठेकेदार/उप-ठेकेदार इस
                                अनुबंध के तहत
                                शाकुंतलम इन्फोसोल्यूशंस के लिए निर्दिष्ट नियमों और शर्तों से बंधे होंगे।
                                इस अनुबंध की शर्तों के अनुसार शाकुंतलम इंफोसोल्यूशंस द्वारा सेवाएं प्रदान करने के क्रम
                                में, -------------
                                सभी आवश्यक डेटा, सामग्री और जानकारी 'जानने की अवयाशयकता के आधार पर' उपलब्ध कराएंगे ताकि
                                6.3
                                6.4
                                7.1
                                7.2
                                8.1
                                शाकुंतलम इन्फोसोल्यूशंस अपने कार्यों का निर्वहन उपर्युक्त उद्देश्य के लिए, एसओडबल्यू में
                                निर्दिष्ट समय-सीमा
                                के भीतर कर सके
                                शाकुंतलम इन्फोसोल्यूशंस अन्य बातों के साथ-साथ निम्नलिखित ---------+-++ को प्रदान करेगा-
                                एक संपर्क बिंदु नामित करना
                                समय-समय पर सेवाएं प्रदान करने के लिए लागू व्यवसाय नियम की जानकारी देना।
                                एसओडबल्यू में परिभाषित सहमत समय सीमा के भीतर सेवाएं प्रदान करने के लिए मासिक इनपुट।
                                प्रसंस्करण/वितरण के लिए आवश्यक ऐसे अन्य प्रासंगिक डेटा/सूचना प्रदान करना।
                                शाकुंतलम इन्फोसॉल्यूशंस के स्वामित्व वाले सभी दस्तावेज शाकुंतलम इन्फोसॉल्यूशंस की
                                संपत्ति बने रहेंगे,
                                जिसमें बिना किसी सीमा के, किसी भी पक्ष द्वारा किए गए सभी संशोधन, संवर्द्धन, सुधार और
                                अनुवाद शामिल
                                हैं।
                                समापन:
                                दोनों पक्षों की आपसी सहमति से इस अनुबंध को समाप्त किया जा सकता है।
                                किसी एक पक्ष द्वारा इस अनुबंध के नियम और शर्तों का उल्लंघन किए जाने के मामले में अन्य
                                पक्ष उल्लंघन
                                करने वाले पक्ष को त्रुटि को ठीक करने के लिए 15 दिनों का नोटिस देगा। यदि उल्लंघन करने
                                वाले पक्ष ने 30
                                दिनों के भीतर त्रुटि को ठीक नहीं किया, तो उक्त 30 दिनों की समाप्ति पर अनुबंध समाप्त समझा
                                जाएगा।
                                समाप्ति का परिणाम :
                                इस अनुबंध के समाप्त होने पर:
                                क. ---.....----- छोड़ देगा और स्वयं तथा अपने कर्मचारियों, एजेन्टों, व प्रतिनिधियों और
                                सम्पत्तियों, यदि
                                कोई हों, तो शाकुंतलम इन्फोसॉल्यूशंस के परिसर से हटा लेगा।
                                ख. शाकुंतलम इन्फोसॉल्यूशंस _की सारी संपत्तियाँ, यदि कोई हों, जो कार्य के दौरान अर्जित की
                                गयी हों, को लौटा देगा।
                                8.2
                                ग. प्रत्येक पक्ष अनुबंध समाप्ति के एक महीने के भीतर दूसरे पक्ष को उन सभी राशियों का
                                भुगतान करेगा, जो
                                कि इस तरह की समाप्ति से पहले उचित रूप से देय थी।
                                इस समझौते का कालातीत होना या इसकी समाप्ति, पक्षों के अर्जित अधिकारों और दायित्ों के
                                प्रति पूर्वाग्रह के
                                बिना होगी और ऐसे सभी अर्जित अधिकार और दायित्व पूर्ण से लागू और प्रभावी रहेंगे और ऐसी
                                समाप्ति या
                                कालातीत होने के बावजूद लागू हो सकेंगे।
                                गोपनीयता:
                                द्वितीय भाग का पक्ष अर्थात ---++++++> (प्राप्तकर्ता पक्ष) एतदद्वारा सहमत है
                                (i) शाकुंतलम इन्फोसॉल्यूशंस (“प्रकटीकरण करने वाला पक्ष”) की गोपनीय जानकारी को सख्त
                                गोपनीयता
                                में रखना और ऐसी गोपनीय जानकारी की सुरक्षा के लिए उचित सावधानी बरतना (बिना किसी सीमा
                                के, वे सभी सावधानियाँ शामिल हैं, जिन्हें प्राप्त करने वाला पक्ष अपनी गोपनीय सामग्री के
                                संबंध में
                                नियोजित करता है) ,
                                (i) ऐसी किसी गोपनीय जानकारी या उससे प्राप्त किसी जानकारी को किसी तीसरे व्यक्ति को प्रकट
                                नहीं
                                करना;
                                (1). इस तरह की गोपनीय जानकारी का किसी भी समय किसी भी तरह का कोई उपयोग नहीं करना,
                                सिवाय इसके कि जो यहाँ वर्णित है।
                                (५) ऐसी किसी भी गोपनीय जानकारी को कॉपी या रिवर्स इंजीनियर नहीं करना, और
                                (५) यह कि किसी भी कर्मचारी, उपठेकेदार, या एजेंट को ऐसी किसी भी गोपनीय जानकारी तक पहुंच
                                प्रदान करने के लिए एक बैध "जानने की आवश्यकता" होनी चाहिए और प्राप्त करने वाले पक्ष के
                                गोपनीयता दायित्वों का पालन करने के लिए लिखित रूप में बाध्य होना चाहिए, चाहे सामान्य रूप
                                से
                                हो या इस विशेष तौर पर इस अनुबंध के लिए हो।
                                10. अप्रत्याशित घटना:
                                10.1
                                किसी भी पक्ष की इस अनुबंध के सभी या किसी भी हिस्से को निष्पादित करने में हुई किसी भी
                                देरी या
                                विफलता के परिणामस्वरूप होने वाली किसी भी हानि या क्षति के कारण अन्य पक्ष की कोई देयता
                                नहीं
                                होगी, बशर्ते इस तरह की देरी या विफलता एकल रूप में या अलग-अलग घटनाओं के रूप में होती है,
                                जो
                                कि उचित नियंत्रण से परे हैं और उक्त पक्ष की लापरवाही के कारण नहीं हुई हैं। (एतदोपरांत
                                "अप्रत्याशित
                                घटना" के रूप में संदर्भित)।
                                10.2
                                अप्रत्याशित घटना' का अर्थ है, ऐसी घटना, जो नियंत्रण से बाहर हो और प्रभावित पक्ष की ग़लती
                                या
                                लापरवाही के कारण न हुई हो और इस अनुबंध के प्रभावी होने के बाद हुई है; इसमें शामिल हैं,
                                किन्तु इन्हीं
                                तक सीमित नहीं है - दैवीय प्रकोप, सार्वजनिक विद्वेष, सुविधाओं का हनन या ज़ब्ती, युद्ध
                                (घोषित या
                                अघोषित), विद्रोह, तोड़फोड़ या दंगे, बाढ़, आग, विस्फोट, या अन्य आपदाएं।
                                10.3
                                राहत का दावा चाहने वाला पक्ष ऐसी घटना के 24 कार्य घंटों के भीतर लिखित रूप में दूसरे पक्ष
                                को सूचित
                                करेगा और इस तरह के नोटिस पर, इस अनुबंध का कोई भी पक्ष इस समझौते के तहत अपनी
                                जिम्मेदारियों
                                से मुक्त हो जाएगा और कोई भी अप्रत्याशित घटना क्षम्य होगी।

                                11. अनुबंध में संशोधन:
                                इस अनुबंध को यहाँ वर्णित संबंधित पक्षों की सहमति और आपसी विचार-विमर्श के बाद संशोधित
                                किया जा
                                सकता है और लिखित रूप में विधिवत अधिकृत प्रतिनिधियों द्वारा उचित रूप से निष्पादित किया जा
                                सकता है।

                                12. विवाद समाधान:
                                यदि इस अनुबंध के संबंध में या इसके संबंध में पक्षों के बीच कोई विवाद या मतभेद उत्पन्न
                                होता है, तो पक्ष
                                मामले को सुलझाने की दृष्टि से नेकनीयती से बातचीत करेंगे। यदि, पक्षों द्वारा और उनके बीच
                                बातचीत के
                                बावजूद विवाद या मतभेद का समाधान नहीं होता है, तो कोई भी पक्ष मध्यस्थता और सुलह अधिनियम,
                                1996
                                के प्रावधानों के अनुसार विवाद को पारस्परिक रूप से नियुक्त एकमात्र मध्यस्थ द्वारा संचालित
                                मध्यस्थता के
                                लिए संदर्भित कर सकता है। मध्यस्थ द्वारा दिया गया निर्णय पक्षकारों पर बाध्यकारी होगा।
                                मध्यस्थता का
                                स्थान अमेठी, उत्तर प्रदेश में होगा और ऐसी कार्यवाही के प्रयोजन के लिए भाषा अंग्रेजी
                                होगी।

                                13. santa:
                                यह समझौता भारत के कानूनों के अनुसार शासित और व्याख्यायित किया जाएगा, और इस समझौते से
                                उत्पन्न
                                होने वाले या इससे संबंधित सभी मामलों में केवल उत्तर प्रदेश में सक्षम न्यायालयों के अनन्य
                                क्षेत्राधिकार के
                                अधीन होगा।

                                इसके साक्ष्य में जहां पक्षकारों ने इसके ऊपर पूर्व में लिखे गए दिन, तारीख और वर्ष पर
                                अपने-अपने हस्ताक्षर किए हैं।

                                एतदनामित व्यक्तियों द्वारा हस्ताक्षरित और निष्पादित

                                मेसर्स शाकुंतलम इन्फोसोल्यूशंस
                                इसके अधिकृत हस्ताक्षरकर्ता द्वारा
                                श्री अजीत दुबे

                                एतदनामित द्वारा हस्ताक्षरित व निष्पादित
                                कार्य का दायरा

                                पक्षों द्वारा यह समझा जाता है कि श्री --------------- वित्तीय बाजारों में एक सक्रिय
                                भागीदार हैं और अन्य बातों के साथ-

                                साथ इनके पास एक डीमैट खाता भी है। इसके अलावा, श्री ---------++- शेयरों, प्रतिभूतियों आदि
                                में निवेश करने में
                                रुचि रखते हैं और/या पहले से ही निवेश करते रहे हैं।

                                दूसरी ओर, शाकुंतलम इंफोसोल्यूशंस के पास एक उचित कार्यात्मक सेट-अप है, जिसमें कार्यालय
                                स्थान, कंप्यूटर, लेखा
                                सॉफ्टवेयर और कर्मचारी शामिल हैं जो कंप्यूटर और संबंधित लेखा सॉफ्टवेयर के अच्छे जानकार
                                हैं। शाकुंतलम
                                इंफोसोल्यूशंस पहले से ही अपने ग्राहकों को कंप्यूटर से संबंधित सेवाएं प्रदान करने के
                                कारोबार में है।

                                श्री -------------- एक नियमित निवेशक रहे हैं, किए गए लेनदेन और/या शेयरों, प्रतिभूतियों
                                आदि में किए गए निवेश के
                                लिए इन्होने रीयल-टाइम लेखांकन सेवाएं प्रदान करने के लिए शाकुंतलम इन्फोसोल्यूशंस से
                                संपर्क किया है। इस पृष्ठभूमि

                                में, शाकुंतलम इन्फोसोल्यूशंस श्री ----------+ को निम्नलिखित सेवाएं प्रदान करेगा।

                                * शाकुंतलम इंफोसोल्यूशंस अपने पास उपलब्ध संपत्तियों/क्षमताओं का उपयोग करेगा और रीयल-टाइम
                                लेखा सेवाएं

                                प्रदान करेगा जिसमें अन्य बातों के साथ-साथ शेयरों, प्रतिभूतियों आदि में की गयी सभी खरीद
                                और बिक्री का रेकॉर्ड
                                शामिल होगा।

                                e श्री ----+++++- को किसी भी खरीद/बिक्री लेनदेन करने के लिए पर पर रीयल-टाइम वित्तीय
                                अपडेट प्रदान करेगा।

                                » अनुबंध के दौरान श्री __ द्वारा की गयी सभी ख़रीद और बिक्री लेनदेन के संबंध में
                                पूरा रेकॉर्ड रखेगा।

                                e Ff के साथ दैनिक, साप्ताहिक, मासिक रिपोर्ट साझा करेगा, जिसमें उक्त अवधि में किए

                                गए सभी लेनदेन और शुद्ध वित्तीय स्थिति का सारांश होगा।

                                श्री को सूचित करना कि उनके द्वारा तय की गयी (यदि की गयी हो) ट्रेडिंग सीमा समाप्त हो
                                गयी है। उद्यहरण के लिए यदि श्री ने अपनी दैनिक ट्रेडिंग सीमा रुपये 710 000 की ट्रेडिंग
                                सीया तय की
                                है. तो उस दिन 10,000 रुपये की सीमा को प्राक्ष कर लेने पर शाकुंतलम इफोसोल्यूशंस उन्हें
                                खक्तित करेगा।
                                ० ऐसी अन्य संबन्धित सेवाएँ, जो उपर्युक्त सेवाओं की पूर्ति के लिए आवश्यक हों, और/या जैसी
                                पक्षों के बीच सहमति
                                बनी हो।

                                नोट - शेयरों ब्रतिशतियों आदि की खरीद और बिक्री सहित किए जाने वाले लेन-देन से संबंधित सभी
                                निर्णय केवल श्री --
                                wae - और शकुंतलम इन्फोसोल्यूशंस की जिस्मेदारी छोगी और सेवाएं केवल श्री -------------
                                द्वारा किए यए ऐसे

                                लेनदेन के संबंध में वास्तविक समय लेखा सेवाएं प्रद्न करने के लिए ह्ोंगी। हालांकि श्री
                                ----------- - को शाकुंतलम

                                इन्फोसोल्यूशंस के साथ जल्द ये जल्द TH शेयरों/प्रितिशातियों आदि की खरीद और बिक्री से
                                संबंधित जानकारी TAT
                                करनी होगी।
                            </div>
                            <div class="container flex justify-center position-absolute">
                                <button type="submit" class="bg-gray-500 text-white p-2 rounded-lg text-lg w-auto float-right">
                                    I agree
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container flex justify-center">
                <div class="position-absolute bottom-0 flex justify-content-between lg:w-1/2 m-2 w-11/12">
                    <router-link :to="{name: 'service'}">
                        <button type="submit" class="bg-gray-500 text-white p-2 rounded-lg text-lg w-auto float-right">
                            Cancel
                        </button>
                    </router-link>
                    <!--                    <router-link :to="{name: 'dashboard'}">-->
                    <a href="api/generate-pdf" type="submit" class=" btn-active bg-yellow-500 text-white p-2 ml-6 rounded-lg text-lg w-auto float-right">Download
                    </a>
                    <!--                    </router-link>-->
                </div>
            </div>

        </section>
    </main>
</template>

<script>
    export default {
        name: "Policy",
        data() {
            return {
                english: true,
                hindi: false,
            }
        },
        methods: {
            contactUs() {
                this.$router.push('/contact');
            },
            service() {
                this.$router.push('/');
            },
            languageChangeHindi() {
                this.english = false;
                this.hindi = true;
            },
            languageChangeEng() {
                this.english = true;
                this.hindi = false;
            },
            async download() {
                let data = await axios.get(`/api/generate-pdf`);
                console.log(data);
            },
        }
    }
</script>

<style scoped>

</style>
