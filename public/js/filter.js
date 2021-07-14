$(document).ready(function () {
    let requires = {
        "pool_type": true,
        "pool_filter_value": true,
    };


    $('.sliderik').slick({
        adaptiveHeight: false,
        arrows: true
    });
    $('.facilitySlider').slick({
        adaptiveHeight: false,
        arrows: true
    });
    // $('.facilitySliderSingle').slick({
    //     adaptiveHeight: false,
    //     arrows: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 3
    // });
    $('.facilitySliderPhotos').slick({
        adaptiveHeight: false,
        arrows: true,
        slidesToShow: 6,
        slidesToScroll: 6
    });

    //water


    $('[data-type=slide_height_filter]').change(function () {
        $('.sliderik').slick('slickUnfilter');
        let filterValue = this.value;
        let filterName = this.className;

        const pools = $('[data-name=waterslide_filter]');

        if (this.checked) {
            if ($('.' + filterName + ':checked').length == 1) {
                pools.each(function (index, pool) {
                    $(pool).attr('data-show', false)
                });
            }
            pools.each(function (index, pool) {
                let json = ($(pool).data('require'));
                let isThereFalse = true;
                Object.keys(json).forEach(function (k) {
                    if (k != filterName && json[k] == false) {
                        isThereFalse = false;
                    }
                });

                // ($(pool).data(filterName) == filterValue);

                console.log('$(pool).data(filterName) ', $(pool).data(filterName), '=====', filterValue, '----->', $(pool).data(filterName) == filterValue)
                console.log('filterValue ', filterValue)
                if (isThereFalse == true && isTrue == true) {
                    json[filterName] = true;
                    if (pool.id) {
                        $(pool).attr('data-show', true)
                    }
                    $(pool).attr('data-require', JSON.stringify(json))

                } else if (isTrue == false && !$('[value=' + $(pool).data(filterName) + ']').is(':checked')) {
                    json[filterName] = false;
                    $(pool).attr('data-require', JSON.stringify(json))
                }
            });
        } else {        //if not checked
            if ($('.' + filterName + ':checked').length == 0) {
                pools.each(function (index, pool) {
                    let json = $(pool).data('require');
                    let isThereFalse = true;
                    json[filterName] = true;
                    Object.keys(json).forEach(function (k) {
                        if (json[k] == false) {
                            isThereFalse = false;
                        }
                    });
                    if (isThereFalse == true) {
                        if (pool.id) {
                            $(pool).attr('data-show', true)
                        }
                    }
                    $(pool).attr('data-require', JSON.stringify(json))
                });
            } else {
                pools.each(function (index, pool) {
                    let json = ($(pool).data('require'));
                    if ($(pool).data(filterName) == filterValue) {
                        json[filterName] = false;
                        $(pool).attr('data-show', false)
                        $(pool).attr('data-require', JSON.stringify(json))
                    }
                });
            }

        }
        const facilities = $('.facilityDiv').show();
        facilities.each(function (index, facility) {
            if ($(facility).find('[data-show=true]').length < 1) {
                $(facility).hide();
            } else {
                $(facility).show();
            }
        })
        $('.sliderik').slick('slickFilter', '[data-show=true]');
    });


    //endwater

    $('[data-type=filter]').change(function () {
        $('.sliderik').slick('slickUnfilter');
        let filterValue = this.value;
        let filterName = this.className;
        const pools = $('[data-name=pool_filter]');
        if (this.checked) {
            if ($('.' + filterName + ':checked').length == 1) {
                pools.each(function (index, pool) {
                    $(pool).attr('data-show', false)
                });
            }
            pools.each(function (index, pool) {
                let json = ($(pool).data('require'));
                let isThereFalse = true;
                Object.keys(json).forEach(function (k) {
                    if (k != filterName && json[k] == false) {
                        isThereFalse = false;
                    }
                });
                if (isThereFalse == true && $(pool).data(filterName) == filterValue) {
                    json[filterName] = true;
                    if (pool.id) {
                        $(pool).attr('data-show', true)
                    }
                    $(pool).attr('data-require', JSON.stringify(json))

                } else if ($(pool).data(filterName) != filterValue && !$('[value=' + $(pool).data(filterName) + ']').is(':checked')) {
                    json[filterName] = false;
                    $(pool).attr('data-require', JSON.stringify(json))
                }
            });
        } else {        //if not checked
            if ($('.' + filterName + ':checked').length == 0) {
                pools.each(function (index, pool) {
                    let json = $(pool).data('require');
                    let isThereFalse = true;
                    json[filterName] = true;
                    Object.keys(json).forEach(function (k) {
                        if (json[k] == false) {
                            isThereFalse = false;
                        }
                    });
                    if (isThereFalse == true) {
                        if (pool.id) {
                            $(pool).attr('data-show', true)
                        }
                    }
                    $(pool).attr('data-require', JSON.stringify(json))
                });
            } else {
                pools.each(function (index, pool) {
                    let json = ($(pool).data('require'));
                    if ($(pool).data(filterName) == filterValue) {
                        json[filterName] = false;
                        $(pool).attr('data-show', false)
                        $(pool).attr('data-require', JSON.stringify(json))
                    }
                });
            }

        }
        const facilities = $('.facilityDiv').show();
        facilities.each(function (index, facility) {
            console.log('facility ', facility);
            if ($(facility).find('[data-show=true]').length < 1) {
                $(facility).hide();
            } else {
                $(facility).show();
            }
        })
        $('.sliderik').slick('slickFilter', '[data-show=true]');
    });


    // ___________________________________________

    $('[data-type=filter_multiple]').change(function () {
        $('.sliderik').slick('slickUnfilter');
        let filterValue = this.value;
        let filterName = this.className;
        const pools = $('[data-multi_name=pool_filter_multiple]');

        if (this.checked) {
            if ($('.' + filterName + ':checked').length == 1) {
                pools.each(function (index, pool) {
                    $(pool).attr('data-show', false)
                });
                pools.each(function (index, pool) {
                    let isThereFalse = true;
                    let json = $(pool).data('require');
                    const pool_filter_value = $(pool).data(filterName);
                    let inArray = pool_filter_value.indexOf(parseInt(filterValue)) == -1; //if there is not in array than inArray will be false
                    if (!inArray) {                        //if there is in array
                        json[filterName] = true;
                        Object.keys(json).forEach(function (k) {
                            if (k != filterName) {
                                if (json[k] == false) {
                                    isThereFalse = false;
                                }
                            }
                        });
                        $(pool).attr('data-require', JSON.stringify(json))
                        if (isThereFalse) {
                            if (pool.id) {
                                $(pool).attr('data-show', true)
                            }
                        }
                    } else {
                        json[filterName] = false;
                        $(pool).attr('data-require', JSON.stringify(json))
                    }
                });
            } else {
                pools.each(function (index, pool) {
                    let isThereFalse = true;
                    let json = $(pool).data('require');
                    const pool_filter_value = $(pool).data(filterName);
                    let inArray = pool_filter_value.indexOf(parseInt(filterValue)) == -1; //if there is not in array than inArray will be false

                    if (!inArray) {                        //if there is in array
                        json[filterName] = true;
                        Object.keys(json).forEach(function (k) {
                            if (k != filterName) {
                                if (json[k] == false) {
                                    isThereFalse = false;
                                }
                            }
                        });
                        if (isThereFalse == true) {
                            if (pool.id) {
                                $(pool).attr('data-show', true)
                            }
                        }
                    } else {        //if is not in array
                        let isShow = false;
                        pool_filter_value.forEach(function (feature) {       //from array is there another checked checkbox
                            let checkbox = $('[value=' + feature + ']');
                            if (checkbox[0].checked) {
                                isShow = true;
                            }
                        })
                        if (isShow === true) {      //if there is checked checkbox
                            json[filterName] = true;
                            Object.keys(json).forEach(function (k) {        //if this filter is okay check another filter for this pool
                                if (json[k] == false) {
                                    isThereFalse = false;
                                }
                            });
                            if (isThereFalse == true) {
                                if (pool.id) {
                                    $(pool).attr('data-show', true)
                                }
                            } else {
                                $(pool).attr('data-show', false)
                            }
                        } else {                 //if there is not else checked checkbox and checked not in array
                            json[filterName] = false;
                            $(pool).attr('data-show', false)
                        }

                    }
                    $(pool).attr('data-require', JSON.stringify(json))
                })
            }
        } else {  //if not checked
            if ($('.' + filterName + ':checked').length == 0) {
                pools.each(function (index, pool) {
                    let json = $(pool).data('require');
                    let isThereFalse = true;
                    json[filterName] = true;
                    Object.keys(json).forEach(function (k) {
                        if (json[k] == false) {
                            isThereFalse = false;
                        }
                    });
                    if (isThereFalse == true) {
                        if (pool.id) {
                            $(pool).attr('data-show', true)
                        }
                    }
                    $(pool).attr('data-require', JSON.stringify(json))
                });
            } else {
                pools.each(function (index, pool) {
                    const pool_filter_value = $(pool).data(filterName);
                    let isShow = false;
                    pool_filter_value.forEach(function (feature) {       //from array is there another checked checkbox
                        let checkbox = $('[value=' + feature + ']');
                        if (checkbox[0].checked) {
                            isShow = true;
                        }
                    })
                    if (isShow === true) {      //if there is checked checkbox
                        let isThereFalse = true;
                        let json = $(pool).data('require');
                        json[filterName] = true;
                        Object.keys(json).forEach(function (k) {        //if this filter is okay check another filter for this pool
                            if (json[k] == false) {
                                isThereFalse = false;
                            }
                        });
                        if (isThereFalse == true) {
                            if (pool.id) {
                                $(pool).attr('data-show', true)
                            }
                        } else {
                            $(pool).attr('data-show', false)

                        }
                    } else {
                        $(pool).attr('data-show', false)
                    }
                })
            }
        }
        const facilities = $('.facilityDiv').show();
        facilities.each(function (index, facility) {
            if ($(facility).find('[data-show=true]').length < 1) {
                $(facility).hide();
            } else {
                $(facility).show();
            }
        })

        $('.sliderik').slick('slickFilter', '[data-show=true]');

    });
//---------------------------------------------------
//---------------------------------------------------
//---------------------------------------------------
//---------------------------------------------------
    $('[data-type=filter_number]').change(function () {

        $('.sliderik').slick('slickUnfilter');
        let filterValue = this.value;
        let filterName = this.className;

        const pools = $('[data-name=pool_filter]');
        if (this.checked) {
            if ($('.' + filterName + ':checked').length == 1) {
                pools.each(function (index, pool) {
                    $(pool).attr('data-show', false)
                });
            }
            pools.each(function (index, pool) {
                console.log('$(pool).data(filterName) ', $(pool).data(filterName));
                let json = ($(pool).data('require'));
                let isThereFalse = true;
                Object.keys(json).forEach(function (k) {
                    if (k != filterName && json[k] == false) {
                        isThereFalse = false;
                    }
                });

                let trueTemperature = false;
                if (filterValue == 1) {
                    if ($(pool).data(filterName) <= 27) trueTemperature = true;
                } else if (filterValue == 2) {
                    if ($(pool).data(filterName) == 28 || $(pool).data(filterName) == 29) trueTemperature = true;
                } else if (filterValue == 3) {
                    if ($(pool).data(filterName) == 30 || $(pool).data(filterName) == 31) trueTemperature = true;
                } else if (filterValue == 4) {
                    if ($(pool).data(filterName) == 32 || $(pool).data(filterName) == 33) trueTemperature = true;
                } else if (filterValue == 5) {
                    if ($(pool).data(filterName) >= 34) trueTemperature = true;
                }

                if (isThereFalse == true && trueTemperature == true) {
                    json[filterName] = true;
                    if (pool.id) {
                        $(pool).attr('data-show', true)
                    }
                    $(pool).attr('data-require', JSON.stringify(json))

                } else if (trueTemperature == false && !$('[value=' + $(pool).data(filterName) + ']').is(':checked')) {
                    json[filterName] = false;
                    $(pool).attr('data-require', JSON.stringify(json))
                }
            });
        } else {        //if not checked
            if ($('.' + filterName + ':checked').length == 0) {
                pools.each(function (index, pool) {
                    let json = $(pool).data('require');
                    let isThereFalse = true;
                    json[filterName] = true;
                    Object.keys(json).forEach(function (k) {
                        if (json[k] == false) {
                            isThereFalse = false;
                        }
                    });
                    if (isThereFalse == true) {
                        if (pool.id) {
                            $(pool).attr('data-show', true)
                        }
                    }
                    $(pool).attr('data-require', JSON.stringify(json))
                });
            } else {
                pools.each(function (index, pool) {
                    let json = ($(pool).data('require'));
                    if ($(pool).data(filterName) == filterValue) {
                        json[filterName] = false;
                        $(pool).attr('data-show', false)
                        $(pool).attr('data-require', JSON.stringify(json))
                    }
                });
            }

        }
        const facilities = $('.facilityDiv').show();
        facilities.each(function (index, facility) {
            if ($(facility).find('[data-show=true]').length < 1) {
                $(facility).hide();
            } else {
                $(facility).show();
            }
        })
        $('.sliderik').slick('slickFilter', '[data-show=true]');
    });

//---------------------------------------------------
//---------------------------------------------------
//---------------------------------------------------
//---------------------------------------------------
})


function resetFilter(filter) {
    $('.sliderik').slick('slickUnfilter');
    $('.' + filter).prop("checked", false);
    let filterName = filter;
    const pools = $('[data-name=pool_filter]');
    pools.each(function (index, pool) {
        let json = $(pool).data('require');
        let isThereFalse = true;
        json[filterName] = true;
        Object.keys(json).forEach(function (k) {
            if (json[k] == false) {
                isThereFalse = false;
            }
        });
        if (isThereFalse == true) {
            if (pool.id) {
                $(pool).attr('data-show', true)
            }
        }
        $(pool).attr('data-require', JSON.stringify(json))
    });
    $('.sliderik').slick('slickFilter', '[data-show=true]');
}

function resetFilterWaterslide(filter) {
    $('.sliderik').slick('slickUnfilter');
    $('.' + filter).prop("checked", false);
    let filterName = filter;
    const waterslides = $('[data-name=waterslide_filter]');
    waterslides.each(function (index, waterslide) {
        let json = $(waterslide).data('require');
        let isThereFalse = true;
        json[filterName] = true;
        Object.keys(json).forEach(function (k) {
            if (json[k] == false) {
                isThereFalse = false;
            }
        });
        if (isThereFalse == true) {
            if (waterslide.id) {
                $(waterslide).attr('data-show', true)
            }
        }
        $(waterslide).attr('data-require', JSON.stringify(json))
    });
    $('.sliderik').slick('slickFilter', '[data-show=true]');
}


