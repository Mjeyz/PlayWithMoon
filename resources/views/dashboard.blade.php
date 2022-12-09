<x-layout>
    @section('content')
        
        <div class="dashboard-container">
            <div class="desktopContainer">
                <div class="cards">
                    <div class="text-center pt-3">
                        <button class="w-100 btn-new-card">
                            <div class="btn-icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                            <div class="btn-text">Create a New Card</div>
                        </button>
                        <div class="cardsHeader">
                            <h3 class="web-app-home-title">Cards</h3>
                            <div style="display: none;">
                                <div style="padding-top: 5px;">
                                    <button class="cards-left-tab" disabled="" style="color: black;">Active</button>
                                    <button class="cards-right-tab" style="color: grey;">Inactive</button>
                                </div>
                            </div>
                        </div>
                        <div id="crtNewCard" class="centered" style="margin-bottom: 18px;">
                            <div class="card-placeholder-container">
                                <div class="text-center card-placeholder">
                                    <p>+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="activity">
                    <div class="text-center pt-3">
                        <div class="activityHeader">
                            <h3 class="web-app-home-title">All Activity</h3></div>
                        <div class="activity-container">
                            <table>
                                <tbody>
                                    <tr class="activity-placeholder">
                                        <td>No transactions yet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobileContainer">
                <div class="mobile-tabs">
                    <div style="display: flex; width: 100%;">
                        <button class="leftTab activeCryptoTTab">Cards</button>
                        <button class="rightTab inActiveCryptoTTab">Activity</button>
                    </div>
                    <button class="mobile-btn-new-card">
                        <div class="btn-text">New Card</div>
                    </button>
                </div>
                <div class="cards">
                    <div class="text-center pt-3">
                        <button class="w-100 btn-new-card">
                            <div class="btn-icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                            <div class="btn-text">Create a New Card</div>
                        </button>
                        <div class="cardsHeader" style="justify-content: center; margin: 15px 0px;">
                            <h3 class="web-app-home-title">Cards</h3>
                            <div style="display: none;">
                                <div style="display: flex;"><span class="activeText">Active</span>
                                    <input class="react-switch-checkbox" id="react-switch-new" type="checkbox">
                                    <label class="react-switch-label" for="react-switch-new" style="background: rgb(6, 103, 208);"><span class="react-switch-button"></span></label><span class="inactiveText">Inactive</span></div>
                            </div>
                        </div>
                        <div id="crtNewCard" class="centered" style="margin-bottom: 18px;">
                            <div class="card-placeholder-container">
                                <div class="text-center card-placeholder">
                                    <p>+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="mdoel">
            <div class="CreateCard create-card-hide-bt ShowModel">
                <div>
                <div class="mobile-back-button">
                    <div style="display: flex; justify-content: space-evenly;">
                    <div style="height: auto; cursor: pointer; margin-left: 15px; margin-right: auto; width: fit-content; padding: 30px 15px 20px 0px;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 back-btn-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                        </svg>
                        <span class="back-btn-text"> Back</span>
                    </div>
                    <span style="padding: 23px 15px 20px 0px; font-weight: 700; font-size: 20px;">Create a New Card</span>
                    </div>
                    <div class="back-btn-line" style="margin: 0px 0px 20px; background-color: rgb(216, 216, 216);"></div>
                </div>
                <span>
                    <div class="desktop-close-button" style="text-align: right;">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 close-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                        <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg>
                    </div>
                    <h2 class="create-card-title">Create a New Card</h2>
                </span>
                <div class="create-card-flex" style="--mobile:flex;">
                    <div>
                    <div class="Card">
                        <img src="images/card_background.svg" class="wallet-icon" alt="Card">
                        <div class="CardBalance">$<span id="cradBalance">0.00</span></div>
                        <div class="CreateCardNumber">
                        <span>XXXX XXXX XXXX XXXX</span>
                        </div>
                        <div class="CreateCardExp">
                        <span>XX/XX</span>
                        </div>
                        <div class="CreateCardCvv">
                        <span>XXX</span>
                        </div>
                    </div>
                    <div class="fine-print">Note: this card will be valid for 60 days.</div>
                    </div>
                    <div class="initial-payment-method-selector-container" style="width: 100%;">
                        <div style="max-width: 430px;" id="inputContainer">
                            <div test-id="create-card-inputs">
                            <div test-id="card-amount-input" class="checkout-section checkout-section-order-total no-highlight">
                                <div class="checkout-section-label py-0 ">Card Amount</div>
                                <div class="checkout-order-total-value">
                                <input class="checkout-order-total-value-input" id="checkout-order-total-value-input" type="number" step="any" placeholder="Enter Amount" value="false" style="margin-bottom: 2px; font-size: 18px; color: rgb(0, 0, 0);">
                                </div>
                                <div class="checkout-section-currency-flag disabled">
                                <div>USD <img currency="USD" src="images/usa.f6bbfd56.svg" alt="USD">
                                </div>
                                </div>
                            </div>
                            <div>
                                <div></div>
                                <div></div>
                                <ul class="sequence"></ul>
                            </div>
                            <div class="checkout-section checkout-section-wallet-select no-highlight" style="">
                                <div class="checkout-section-label">Payment Method</div>
                                <div class="checkout-wallet-select-selected-wallet">
                                <div style="padding-bottom: 17.094px;"></div>
                                <div class="checkout-wallet-select-selected-wallet-name" style="font-size: 22px; font-weight: 200; position: relative; bottom: 1px;">Bitcoin</div>
                                <div style="padding-top: 17.094px;"></div>
                                <div class="checkout-wallet-select-selected-wallet-balance-base  hide">$0.00</div>
                                </div>
                                <div test-id="toggle-wallets-dropdown" class="checkout-wallet-select-change">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                </svg>
                                </div>
                                <div class="checkout-wallet-select-change-wallet-selector collapsed" style="width: 420px; --desktop-bottom:249px; --mobile-bottom:582px;">
                                <div test-id="wallet-BTC" class="checkout-wallet-select-change-wallet-selection CONNECT_COINBASE">
                                    <div class="btn-coinbase-icon pt-2 pl-2 pr-2">
                                    <svg aria-hidden="true" role="img" class="svg-inline--fa" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                        <path fill="currentColor" d="M64.5,81.3c5.1,0,10.2-1.1,14.8-2.8l9.7,14.8c-8.5,4.5-17.6,6.8-27.3,6.8c-29,0-50.6-19.3-50.6-50  C11.6,19.3,33.8,0,62.2,0c10.2,0,17.6,2.3,25.6,6.3l-9.1,15.4c-4.5-1.7-9.7-2.8-14.8-2.8c-17.1,0-30.7,10.8-30.7,31.3  C33.2,69.4,46.3,81.3,64.5,81.3z"></path>
                                    </svg>
                                    </div>
                                    <div class="pl-2 checkout-wallet-select-change-wallet-text-area pt-2 pb-2" style="position: relative; bottom: 5px;">
                                    <p class="my-0 font-weight-bold" style="font-size: 13px;">Connect Coinbase</p>
                                    <p class="checkout-wallet-select-change-wallet-selection-value my-0 font-size-80 hide" style="font-size: 12px;">
                                        <i>0</i>
                                    </p>
                                    <p class="checkout-wallet-select-change-wallet-selection-value my-0 font-size-80 " style="font-size: 12px;">
                                        <i>Pay from your Coinbase wallets</i>
                                    </p>
                                    </div>
                                    <div class="checkout-wallet-select-change-wallet-selection-fiat-value hide">
                                    <p>$0.00</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <ul class="sequence no-highlight" style="--dot-bottom:40px;">
                                <li class="text-right">
                                <div test-id="crypto-conversion-rate">
                                    <p class="my-0">Conversion Rate: <b>
                                        <i>1 BTC = <span id="currentBTCPrice">$0.00</span></i>
                                    </b>
                                    </p>
                                    <p class="my-0 font-size-80">
                                    <i>Last updated 1 minutes ago</i>
                                    </p>
                                </div>
                                </li>
                            </ul>
                            <div test-id="payment-amount" class="checkout-section no-highlight">
                                <div class="checkout-section-label">You Pay</div>
                                <div class="checkout-payment-total-value no-highlight">
                                <input id="payment-amount-input"  type="text" disabled="" value="0" style="font-size: 18px;">
                                </div>
                                <div class="checkout-section-currency-flag">
                                <div>BTC <img currency="BTC" src="images/btc.eecdd087.svg" alt="BTC">
                                </div>
                                </div>
                            </div>
                            </div>
                            <button class="btn btn-primary my-3 w-100" id="modelContinuebtn" disabled="">Continue</button>
                        </div>
                        <div style="" class="confirmation-container" id="confirmation-container">
                            <div class="text">
                                <span id="backBTNClick" style="cursor: pointer;">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 back-btn-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                                </svg>
                                <span class="back-btn-text"> Back</span>
                                </span>
                                <br>
                                <div style="margin-top: 10px; font-size: 28px; font-weight: 700;">Is this the correct amount?</div>
                                <div style="margin-top: 15px; font-size: 15px;">- This card will expire in 60 days.</div>
                                <div style="margin-top: 5px; font-size: 15px;">- This card will only work at U.S merchants.</div>
                                <label class="create-card-understand-label">
                                <input class="create-card-understand-checkbox" id="create-card-understand-checkbox" type="checkbox">&nbsp;I understand these conditions </label>
                                <button class="btn btn-primary my-3 w-100" id="ycc__true" disabled>Yes, Create Card</button>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
            <div class="CreateCard create-card-show-bt HideModel">
                <div>
                    <div class="create-card-flex" style="--mobile:flex;">
                    <div class="" style="width: 100%; margin-left: 0px;">
                        <div test-id="bitcoin-payment">
                        <div test-id="bitcoin-payment-tabs" class="bitcoin-payment-tabs-desktop">
                            <button class="bitcoin-payment-left-tab activeCryptoTTab" id="lightning1Btn">Lightning</button>
                            <button class="bitcoin-payment-right-tab inActiveCryptoTTab" id="lightning2Btn">On-Chain</button>
                        </div>
                        <div id="lightning1">
                            {{-- <div class="mobile-view">
                            <div style="display: flex;">
                                <div style="height: auto; cursor: pointer; margin-left: 15px; margin-right: auto; width: fit-content; padding: 30px 15px 20px 0px;">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 back-btn-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                                </svg>
                                <span class="back-btn-text"> Back</span>
                                </div>
                                <span style="padding: 20px 15px 20px 0px; font-weight: 700; font-size: 20px;">Create a New Card</span>
                            </div>
                            <div class="back-btn-line" style="margin: 0px 0px 20px; background-color: rgb(216, 216, 216);"></div>
                            </div> --}}
                            <div test-id="bitcoin-payment-tabs" class="bitcoin-payment-tabs-mobile">
                            <button class="bitcoin-payment-left-tab" disabled="" style="color: rgb(6, 103, 208); border: 2px solid rgb(162, 171, 206); background-color: rgb(227, 237, 247);">Lightning</button>
                            <button class="bitcoin-payment-right-tab" style="color: rgb(155, 155, 155); border: 1px solid lightgray; background-color: white;">On-Chain</button>
                            </div>
                            <div id="moon-ui-paywall">
                            <div id="moon-ui-paywall-ui">
                                <div test-id="bitcoin-payment-method-modal" class="ui-bitcoin-payment-method-container">
                                <div class="mobile-body text-center bitcoin-payment-method-qr-code-canvas-lightning">
                                    <canvas style="height: 0px;"></canvas>
                                    <img src="" alt="" id="image">
                                </div>
                                <div>
                                    <div class="checkout-section" style="width: fit-content; padding: 0px 5px 0px 10px;">
                                    <div class="checkout-payment-total-value" style="width: fit-content; padding-right: 10px;">
                                        <span style="font-size: 23px; font-weight: 700; position: relative; top: 2px;" id="totallBTC">0.00598975</span>
                                    </div>
                                    <div class="checkout-section-currency-flag no-highlight">
                                        <div>
                                        <span>BTC</span>
                                        <img currency="BTC" src="images/btc.eecdd087.svg" alt="BTC">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="bitcoin-payment-method-modal-usd-amount" style="margin-top: 5px; display: flex; place-content: center;">
                                    <span style="margin-right: 5px; font-weight: 700;">≈ $<span id="totalUSDs">0.00 USD</span></span>
                                    <img currency="USD" src="images/usa.f6bbfd56.svg" alt="USD" style="width: 20px;">
                                </div>
                                <div test-id="bitcoin-payment-qr-code" class="bitcoin-payment-method-qr-code-canvas-lightning" style="margin: 10px 0px;">
                                    {{-- <canvas id="canvas" height="245" width="245" style="cursor: pointer; height: 245px; width: 245px;"></canvas> --}}
                                    <img src="images/frame.png" alt="qr" height="245" width="245" style="cursor: pointer; height: 245px; width: 245px;">
                                    <img src="" alt="" id="image">
                                </div>
                                <div class="bitcoin-payment-method-address-lightning">
                                    <div style="font-size: 14px;">LIGHTNING INVOICE <a href="https://paywithmoon.com/lightning-network" target="_blank" rel="noreferrer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="color: rgb(119, 127, 138);">
                                            <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg>
                                    </a>
                                    </div>
                                    <div class="bitcoin-payment-method-order-total-value" style="cursor: pointer;">
                                    <div title="Copy" class="wallet-address">
                                        <span class="bitcoin-payment-method-modal-address no-highlight" id="addrToCopy" style="cursor: pointer;" onclick="copyToClipboard('bc1qwsa64w9v55sey2elghfkzmp9sncfy8fs2zks92')">bc1qwsa64w9v55sey2elghfkzmp9sncfy8fs2zks92</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="bitcoin-payment-method-content-container">
                                    <div class="bitcoin-payment-method-content expiration">
                                    <span>Price expires in </span>
                                    <span style="font-weight: 800;">01:20</span>
                                    </div>
                                </div>
                                <a target="BLANK" href="lightning:lnbc5989530n1p3ez8agpp5zel0mf2nakvg2qx3lgh3w8878q643drxn3eex7fv9jes7nw94qgqdqqcqzpgxqyz5vqsp54s0wgxmtngpxsrnmjg7chxku3el86hy2sd0smfpl79hlk2qh0vjs9qyyssqdzmwp756k7rf5nf80vw5sdh7zg26l098w5h28dvc4j3kyk5x2efp83r2yc3eac2u60zumhr04mtpwszs9nn7vxn4y35excyl3lhelyqqcmc9rs">
                                    <div class="btn btn-primary my-3 w-100 bitcoin-payment-method-open-wallet-btn-lightning">
                                        <div>Open In Wallet</div>
                                    </div>
                                </a>
                                <div class="bitcoin-payment-method-content-container">
                                    <span class="cancel" id="cancelTransection">Cancel</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="lightning2">
                            {{-- <div class="mobile-view">
                            <div style="display: flex;">
                                <div style="height: auto; cursor: pointer; margin-left: 15px; margin-right: auto; width: fit-content; padding: 30px 15px 20px 0px;">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10 back-btn-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                                </svg>
                                <span class="back-btn-text"> Back</span>
                                </div>
                                <span style="padding: 20px 15px 20px 0px; font-weight: 700; font-size: 20px;">Create a New Card</span>
                            </div>
                            <div class="back-btn-line" style="margin: 0px 0px 20px; background-color: rgb(216, 216, 216);"></div>
                            </div> --}}
                            <div test-id="bitcoin-payment-tabs" class="bitcoin-payment-tabs-mobile">
                            <button class="bitcoin-payment-left-tab" disabled="" style="color: rgb(6, 103, 208); border: 2px solid rgb(162, 171, 206); background-color: rgb(227, 237, 247);">Lightning</button>
                            <button class="bitcoin-payment-right-tab" style="color: rgb(155, 155, 155); border: 1px solid lightgray; background-color: white;">On-Chain</button>
                            </div>
                            <div id="moon-ui-paywall">
                            <div id="moon-ui-paywall-ui">
                                <div test-id="bitcoin-payment-method-modal" class="ui-bitcoin-payment-method-container">
                                <div class="mobile-body text-center bitcoin-payment-method-qr-code-canvas-lightning">
                                    <canvas style="height: 0px;"></canvas>
                                    <img src="" alt="" id="image">
                                </div>
                                <div>
                                    <div class="checkout-section" style="width: fit-content; padding: 0px 5px 0px 10px;">
                                    <div class="checkout-payment-total-value" style="width: fit-content; padding-right: 10px;">
                                        <span style="font-size: 23px; font-weight: 700; position: relative; top: 2px;" id="totallBTC">0.00598975</span>
                                    </div>
                                    <div class="checkout-section-currency-flag no-highlight">
                                        <div>
                                        <span>BTC</span>
                                        <img currency="BTC" src="images/btc.eecdd087.svg" alt="BTC">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="bitcoin-payment-method-modal-usd-amount" style="margin-top: 5px; display: flex; place-content: center;">
                                    <span style="margin-right: 5px; font-weight: 700;">≈ $<span id="totalUSDs">0.00 USD</span></span>
                                    <img currency="USD" src="images/usa.f6bbfd56.svg" alt="USD" style="width: 20px;">
                                </div>
                                <div test-id="bitcoin-payment-qr-code" class="bitcoin-payment-method-qr-code-canvas-lightning" style="margin: 10px 0px;">
                                    {{-- <canvas id="canvas" height="245" width="245" style="cursor: pointer; height: 245px; width: 245px;"></canvas> --}}
                                    <img src="images/frame.png" alt="qr" height="245" width="245" style="cursor: pointer; height: 245px; width: 245px;">
                                    <img src="" alt="" id="image">
                                </div>
                                <div class="bitcoin-payment-method-address-lightning">
                                    <div style="font-size: 14px;">BITCOIN ADDRESS <a href="https://paywithmoon.com/lightning-network" target="_blank" rel="noreferrer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="color: rgb(119, 127, 138);">
                                            <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                        </svg>
                                    </a>
                                    </div>
                                    <div class="bitcoin-payment-method-order-total-value" style="cursor: pointer;">
                                    <div title="Copy" class="wallet-address">
                                        <span class="bitcoin-payment-method-modal-address no-highlight" id="addrToCopy" style="cursor: pointer;" onclick="copyToClipboard('bc1qwsa64w9v55sey2elghfkzmp9sncfy8fs2zks92')">bc1qwsa64w9v55sey2elghfkzmp9sncfy8fs2zks92</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="bitcoin-payment-method-content-container">
                                    <div class="bitcoin-payment-method-content expiration">
                                    <span>Price expires in </span>
                                    <span style="font-weight: 800;">01:20</span>
                                    </div>
                                </div>
                                <a target="BLANK" href="lightning:lnbc5989530n1p3ez8agpp5zel0mf2nakvg2qx3lgh3w8878q643drxn3eex7fv9jes7nw94qgqdqqcqzpgxqyz5vqsp54s0wgxmtngpxsrnmjg7chxku3el86hy2sd0smfpl79hlk2qh0vjs9qyyssqdzmwp756k7rf5nf80vw5sdh7zg26l098w5h28dvc4j3kyk5x2efp83r2yc3eac2u60zumhr04mtpwszs9nn7vxn4y35excyl3lhelyqqcmc9rs">
                                    <div class="btn btn-primary my-3 w-100 bitcoin-payment-method-open-wallet-btn-lightning">
                                        <div>Open In Wallet</div>
                                    </div>
                                </a>
                                <div class="bitcoin-payment-method-content-container">
                                    <span class="cancel" id="cancel2Transection">Cancel</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
        </div>

        <script>
            const input = document.getElementById('checkout-order-total-value-input');
            const log = document.getElementById('cradBalance');
            const btcLabelPrice = document.getElementById('currentBTCPrice');
            const btcInputPrice = document.getElementById('payment-amount-input');
            const modelContinuebtn = document.getElementById('modelContinuebtn');
            const ccuc = document.getElementById('create-card-understand-checkbox');
            const totallBTC = document.getElementById('totallBTC');
            const ycc__true = document.getElementById('ycc__true');
            const totalUSDs = document.getElementById('totalUSDs');
             ccuc.onchange = function(){
                if(this.checked){
                    ycc__true.disabled = false;
                } else {
                    ycc__true.disabled = true;
                }
            }

            input.addEventListener('keyup', logKey);
            function logKey(val) {
                log.innerHTML = ` ${input.value}`;
                totalUSDs.innerHTML = ` ${input.value}`;
                btcInputPrice.value = ` ${input.value / window.btcCurrentPrice}`;
                totallBTC.innerHTML = ` ${input.value / window.btcCurrentPrice}`;
                if (input.value > 5 && input.value < 1000) {
                    modelContinuebtn.disabled = false
                }else{
                    modelContinuebtn.disabled = true
                }
            }
            $.ajax({
                    url: "/api/getval",
                    type: 'GET',
                    dataType: 'json', 
                    success: function(res) {
                        btcLabelPrice.innerHTML = res.bitcoin.usd;
                        window.btcCurrentPrice = res.bitcoin.usd;
                    }
                });
            $(document).ready(function(){
                $("#mdoel").hide();
                $("#confirmation-container").hide();
                // $("#lightning1").hide();
                $("#lightning2").hide();
                $(".desktop-close-button").click(function(){
                    $("#mdoel").hide();
                });
                $("#cancelTransection").click(function(){
                    $("#mdoel").hide();
                    // $(".create-card-show-bt").hide();
                });
                
                $("#cancel2Transection").click(function(){
                    $("#mdoel").hide();
                    // $(".create-card-show-bt").hide();
                });
                $("#crtNewCard").click(function(){
                    $("#mdoel").show();
                    $(".create-card-hide-bt").removeClass('HideModel');
                    $(".create-card-hide-bt").addClass('ShowModel');
                });
                $("#modelContinuebtn").click(function(){
                    $("#inputContainer").hide();
                    $("#confirmation-container").show();
                })
                $("#backBTNClick").click(function(){
                    $("#inputContainer").show();
                    $("#confirmation-container").hide();
                })
                $("#ycc__true").click(function(){
                    $(".create-card-hide-bt").removeClass('ShowModel');
                    $(".create-card-hide-bt").addClass('HideModel');
                    $(".create-card-show-bt").removeClass('HideModel');
                    $(".create-card-show-bt").addClass('ShowModel');
                })
                $("#lightning1Btn").click(function(){
                    $("#lightning1").show();
                    $("#lightning2").hide();
                    $('#lightning1Btn').addClass('activeCryptoTTab');
                    $('#lightning1Btn').removeClass('inActiveCryptoTTab');
                    $('#lightning1Btn').addClass('inActiveCryptoTTab');
                    $('#lightning2Btn').removeClass('activeCryptoTTab');
                })
                $("#lightning2Btn").click(function(){
                    $("#lightning2").show();
                    $("#lightning1").hide();
                    $('#lightning2Btn').removeClass('inActiveCryptoTTab');
                    $('#lightning2Btn').addClass('activeCryptoTTab');
                    $('#lightning1Btn').addClass('inActiveCryptoTTab');
                    $('#lightning1Btn').removeClass('activeCryptoTTab');
                })
            });
        </script>
    @endsection
</x-layout>