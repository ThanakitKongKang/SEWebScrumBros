*** Setting ***
Library    Selenium2Library

*** Variable ***
${LOGINPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/login.php
${HOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/home.php
${BROWSER}    Chrome

*** Test Case ***
TC01(Empty password)
    Open Browser    ${LOGINPAGE}    ${BROWSER}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    chitsutha
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}
    Page Should Contain    Failed, password is
    Page Should Contain    incorrect.
    Page Should Contain    you have
    Page Should Contain    2
    Page Should Contain    chances, then
    Page Should Contain    your account will be restricted

TC02(Empty Username)
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}
    Page Should Contain    Failed,
    Page Should Contain    User not found.

TC03(Wrong Username)
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    Wronguser
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}
    Page Should Contain    Failed,
    Page Should Contain    User not found.

TC04(Wrong password)
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    chitsutha
    Input Text    name=password    Wrongpassword
    Click Button    login-button
    Location Should Be    ${LOGINPAGE}
    Page Should Contain    Failed, password is
    Page Should Contain    incorrect.
    Page Should Contain    you have
    Page Should Contain    1
    Page Should Contain    chances, then
    Page Should Contain    your account will be restricted

TC05(Locked Account)
    Go To    ${LOGINPAGE}
    Location Should Be    ${LOGINPAGE}
    Input Text    name=username    593021274-1
    Input Text    name=password    thisisthengs
    Click Button    login-button
    Input Text    name=username    593021274-1
    Input Text    name=password    khntibjtkfy
    Click Button    login-button
    Input Text    name=username    593021274-1
    Input Text    name=password    nbj,fngkdh
    Click Button    login-button
    Input Text    name=username    593021274-1
    Input Text    name=password    meytawut274-1
    Click Button    login-button
    Page Should Contain    Failed, after you have made
    Page Should Contain    3 unsuccessful attempts
    Page Should Contain    your account is restricted!!
    Page Should Contain    , please contact support.