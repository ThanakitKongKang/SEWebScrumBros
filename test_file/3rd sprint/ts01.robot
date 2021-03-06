*** Setting ***
Library    Selenium2Library

*** Variable ***
${LOGINHOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/login.php
${HOMEPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/home.php
${CLASSPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/class.php
${SUMMARYPAGE}    http://10.199.66.227/SoftEn2019/Sec2/ScrumBros/summary.php
${BROWSER}    Chrome

*** Test Case ***
TC01(All Class Summary Page)
    Set Selenium Speed    0.5 seconds
    Open Browser    ${LOGINHOMEPAGE}    ${BROWSER}
    Location Should Contain    ${LOGINHOMEPAGE}
    Input Text    name=username    chitsutha
    Input Text    name=password    chitsuthakku2019
    Click Button    login-button
    Location Should Contain    ${HOMEPAGE}
    Click Element    xpath: //html/body/div/div[1]/div[1]/a/div/div
    Location Should Contain    ${CLASSPAGE}

    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/a
    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/div/table/tbody/tr[2]
    Location Should Contain    ${SUMMARYPAGE}

    Element Should Not Be Visible    xpath: //*[@id="summaryAllDateTable_wrapper"]/div[2]/div
    Click Element    xpath: //*[@id="date"]
    Click Element    xpath: //*[@id="date"]/option[2]
    Location Should Contain    ${SUMMARYPAGE}
    Sleep    2 seconds
    Element Should Be Visible    xpath: //*[@id="summaryAllDateTable_wrapper"]/div[2]/div
    
TC02(Specific Date Summary Page (Clickable Cards))
    Go To    ${HOMEPAGE}
    Location Should Contain    ${HOMEPAGE}
    Click Element    xpath: //html/body/div/div[1]/div[1]/a/div/div
    Location Should Contain    ${CLASSPAGE}

    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/a
    Click Element    xpath: //*[@id="navbarSupportedContent"]/ul/li[2]/div/table/tbody/tr[2]
    Location Should Contain    ${SUMMARYPAGE}

    Element Should Not Be Visible    xpath: //*[@id="cards"]/div
    Click Element    xpath: //*[@id="date"]
    Click Element    xpath: //*[@id="date"]/option[3]
    Location Should Contain    ${SUMMARYPAGE}
    Sleep    2 seconds
    Element Should Be Visible    xpath: //*[@id="cards"]/div
    
    Element Should Not Be Visible    xpath: //*[@id="classStudent_wrapper"]
    Click Element    xpath: //*[@id="cards"]/div/div[1]/div/div
    Sleep    2 seconds
    Element Should Be Visible    xpath: //*[@id="classStudent_wrapper"] 

    Click Element    xpath: //*[@id="cards"]/div/div[2]/div/div
    Sleep    2 seconds
    Element Should Be Visible    xpath: //*[@id="classStudent_wrapper"] 

    Click Element    xpath: //*[@id="cards"]/div/div[3]/div/div
    Sleep    2 seconds
    Element Should Be Visible    xpath: //*[@id="classStudent_wrapper"] 