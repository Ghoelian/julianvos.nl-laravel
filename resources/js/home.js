import $ from "jquery";
import route from "ziggy";
import { Ziggy } from "./ziggy";
import "vis-timeline";

function onSubmit(token) {
    const formData = new FormData()

    formData.append('_token', '{{ csrf_token() }}')
    formData.append('recaptcha_token', token)

    $.ajax({
            url: route('recaptcha', undefined, undefined, Ziggy),
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false
        })
        .done((data) => {
            if (data !== false) {
                $('#contact-details').html($(data))
            } else {
                $('#contact-details').html(
                    '<button class="btn btn-primary g-recaptcha" data-sitekey="6LcWLoIaAAAAAPddYiFygvar6ztBHGneqTzKov7d" data-callback="onSubmit" data-action="click">Show Contact Info</button>'
                )
            }
        })
        .fail((error) => {
            console.log(error)
        })
}

$(document).ready(() => {
    $('#all-projects-button').click(() => {
        window.location = route('projects', undefined, undefined, Ziggy)
    })

    $('.nav-link').click((e) => {
        e.preventDefault()

        const eventTarget = $(e.target)
        const offset = 100
        let targetId = null

        if (eventTarget.prop('tagName') === 'SPAN') {
            targetId = $(e.target).parent().attr('id')
        } else {
            targetId = $(e.target).attr('id')
        }

        const target = $(`#${targetId}-section`)

        const targetPosition = target.offset().top
        const offsetPosition = targetPosition - offset

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        })

        $('#home').toggleClass('active', false)
        $('#about').toggleClass('active', false)
        $('#portfolio').toggleClass('active', false)
        $('#experience').toggleClass('active', false)
        $('#contact').toggleClass('active', false)

        eventTarget.toggleClass('active', true)

        window.history.pushState({}, document.title, targetId)
    })

    const visContainer = $('#experience')

    const timelineItems = new vis.DataSet([

    ])

    const visOptions = {}

    const timeline = new vis.Timeline(timelineContainer, timelineItems, timelineOptions)
})
