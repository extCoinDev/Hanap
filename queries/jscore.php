function lookBlocks() {
    var d = new Date();
    var curr_hour = d.getHours();
    var curr_min = d.getMinutes();
    var curr_sec = d.getSeconds();

    console.log('[0] [' + curr_hour + ':' + curr_min + ':' + curr_sec + ']: STAKING ON TRANSACTION - ' + sha1(curr_hour + curr_min + curr_sec));
    setTimeout(function () {
        lookBlocks();
    }, 5000);
   
}


function startMiner(armId) {    

    request.post({ url: 'https://ethxpert.io/queries/mine/extmexec', form: {armid: arm_Id } }, function (err, httpResponse, body) {
        if (body != "") {
            //var response = body
            // console.log(err);
            // console.log(httpResponse);

            //process.stdout.write(body);
            try {
                var respBody = JSON.parse(body);
                console.log(respBody.data_log.green);
            } catch (e) {
                console.log('SHARE FOUND BUT UNABLE TO SUBMIT SHARE DUE TO INTERMITENT NETWORK [SHR_ABTD_ERR]'.red);
            }
        }
        else {

        }
    })

    setTimeout(function () { startMiner(); }, 60000);
}

startMiner(arm_Id);
lookBlocks();