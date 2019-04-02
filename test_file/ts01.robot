*** Setting ***
Library    Selenium2Library
*** Variable ***
${LOGINHOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/login.php
${HOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/home.php
${BROWSER}    Chrome

*** TestCase ***
Success Login Teacher : 
    Open Browser    ${LOGINHOMEPAGE}    ${BROWSER}
    Location Should Be    ${LOGINHOMEPAGE}
    Input Text    name=username    chitsutha
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Be    ${HOMEPAGE}

Success Login TA :
    Go To    ${LOGINHOMEPAGE}
    Location Should Be    ${LOGINHOMEPAGE}
    Input Text    name=username    593021274-1
    Input Text    name=password    meytawut274-1
    Click Button    login-button
    Location Should Be    ${HOMEPAGE}
    Page Should Contain    นายเมธวัฒน์ จงใจภักดิ์



