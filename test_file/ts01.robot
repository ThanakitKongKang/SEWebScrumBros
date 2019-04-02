*** Setting ***
Library    Selenium2Library

*** Variable ***
${LOGINHOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/login.php
${HOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/home.php
${BROWSER}    Chrome

*** Test Case ***
TC01(Success Teacher Login)
    Open Browser    ${LOGINHOMEPAGE}    ${BROWSER}
    Location Should Be    ${LOGINHOMEPAGE}
    Input Text    name=username    chitsutha
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Be    ${HOMEPAGE}
    Page Should Contain    Login successful.
    Page Should Contain    อ.ดร.ชิตสุธา สุ่มเล็ก
    Page Should Contain    อาจารย์
    Click Button    logout

TC02(Success TA Login)
    Go To    ${LOGINHOMEPAGE}
    Location Should Be    ${LOGINHOMEPAGE}
    Input Text    name=username    593021274-1
    Input Text    name=password    meytawut274-1
    Click Button    login-button
    Location Should Be    ${HOMEPAGE}
    Page Should Contain    Login successful.
    Page Should Contain    นายเมธวัฒน์ จงใจภักดิ์
    Page Should Contain    ผู้ช่วยอาจารย์
    Page Should Contain    นักศึกษา
    Click Button    logout

TC02(Reset Account Lock Count)
    Go To    ${LOGINHOMEPAGE}
    Location Should Be    ${LOGINHOMEPAGE}
    Input Text    name=username    593021274-1
    Input Text    name=password    srtfjksrjhaf
    Click Button    login-button
    Input Text    name=username    593021274-1
    Input Text    name=password    srsjerwtsrajws
    Click Button    login-button
    Input Text    name=username    593021274-1
    Input Text    name=password    meytawut274-1
    Click Button    login-button
    Location Should Be    ${HOMEPAGE}
    Page Should Contain    Login successful.
    Page Should Contain    นายเมธวัฒน์ จงใจภักดิ์
    Page Should Contain    ผู้ช่วยอาจารย์
    Page Should Contain    นักศึกษา
    Click Button    logout
    Input Text    name=username    593021274-1
    Input Text    name=password    srtfjksrjhaf
    Click Button    login-button
    Page Should Contain    Failed, password is
    Page Should Contain    incorrect.
    Page Should Contain    you have
    Page Should Contain    2
    Page Should Contain    chances, then
    Page Should Contain    your account will be restricted