<!-- Triggers  -->

<!-- Message Trigger  -->
<button x-on:click="$dispatch('notify', { variant: 'message', sender:{name:'Jack Ellis', avatar:'https://penguinui.s3.amazonaws.com/component-assets/avatar-2.webp'}, message: 'Hey, can you review the PR I just submitted? Let me know if you spot any issues!' })" type="button" class="cursor-pointer whitespace-nowrap rounded-2xl bg-orange-400 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:bg-orange-600 dark:text-slate-100 dark:focus-visible:outline-orange-600">Message</button>
<!-- Info Trigger  -->
<button x-on:click="$dispatch('notify', { variant: 'info', title: 'Update Available',  message: 'A new version of the app is ready for you. Update now to enjoy the latest features!' })" type="button" class="cursor-pointer whitespace-nowrap rounded-2xl bg-sky-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-500 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75">Info</button>
<!-- Success Trigger  -->
<button x-on:click="$dispatch('notify', { variant: 'success', title: 'Success!',  message: 'Your changes have been saved. Keep up the great work!' })" type="button" class="cursor-pointer whitespace-nowrap rounded-2xl bg-green-400 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-900 transition hover:opacity-75 focus-visible:gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-400 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75">Success</button>
<!-- Danger Trigger  -->
<button x-on:click="$dispatch('notify', { variant: 'danger', title: 'Oops!',  message: 'Something went wrong. Please try again. If the problem persists, we’re here to help!' })" type="button" class="cursor-pointer whitespace-nowrap rounded-2xl bg-red-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75">Danger</button>
<!-- Warning Trigger  -->
<button x-on:click="$dispatch('notify', { variant: 'warning', title: 'Action Needed',  message: 'Your storage is getting low. Consider upgrading your plan.' })" type="button" class="cursor-pointer whitespace-nowrap rounded-2xl bg-amber-500 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-900 transition hover:opacity-75 focus-visible:gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75">Warning</button>

<!-- Notifications -->
<div x-data="{
        notifications: [],
        displayDuration: 8000,
        soundEffect: true,

        addNotification({ variant = 'info', sender = null, title = null, message = null}) {
            const id = Date.now()
            const notification = { id, variant, sender, title, message }

            // Keep only the most recent 20 notifications
            if (this.notifications.length >= 20) {
                this.notifications.splice(0, this.notifications.length - 19)
            }

            // Add the new notification to the notifications stack
            this.notifications.push(notification)

            if (this.soundEffect) {
                // Play the notification sound
                const notificationSound = new Audio('https://res.cloudinary.com/ds8pgw1pf/video/upload/v1728571480/penguinui/component-assets/sounds/ding.mp3')
                notificationSound.play().catch((error) => {
                    console.error('Error playing the sound:', error)
                })
            }
        },
        removeNotification(id) {
            setTimeout(() => {
                this.notifications = this.notifications.filter(
                    (notification) => notification.id !== id,
                )
            }, 400);
        },
    }" x-on:notify.window="addNotification({
            variant: $event.detail.variant,
            sender: $event.detail.sender,
            title: $event.detail.title,
            message: $event.detail.message,
        })">

    <div x-on:mouseenter="$dispatch('pause-auto-dismiss')" x-on:mouseleave="$dispatch('resume-auto-dismiss')" class="group pointer-events-none fixed inset-x-8 top-0 z-[99] flex max-w-full flex-col gap-2 bg-transparent px-6 py-6 md:bottom-0 md:left-[unset] md:right-0 md:top-[unset] md:max-w-sm">
        <template x-for="(notification, index) in notifications" x-bind:key="notification.id">
            <!-- root div holds all of the notifications  -->    
            <div>
                <!-- Info Notification  -->
                <template x-if="notification.variant === 'info'">                
                    <div x-data="{ isVisible: false, timeout: null }" x-cloak x-show="isVisible" class="pointer-events-auto relative rounded-2xl bg-violet-50 text-slate-600 dark:bg-indigo-950 dark:text-violet-100" role="alert" x-on:pause-auto-dismiss.window="clearTimeout(timeout)" x-on:resume-auto-dismiss.window=" timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)" x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id)}, displayDuration))" x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0" x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in" x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24" x-transition:leave-start="translate-x-0 opacity-100">
                        <div class="flex w-full items-center gap-2.5 bg-sky-500/10 rounded-2xl p-4 transition-all duration-300">

                            <!-- Icon -->
                            <div class="rounded-full bg-sky-500/15 p-0.5 text-sky-500" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Title & Message -->
                            <div class="flex flex-col gap-2">
                                <h3 x-cloak x-show="notification.title" class="text-sm font-semibold text-sky-500" x-text="notification.title"></h3>
                                <p x-cloak x-show="notification.message" class="text-pretty text-sm" x-text="notification.message"></p>
                            </div>

                            <!--Dismiss Button -->
                            <button type="button" class="ml-auto" aria-label="dismiss notification" x-on:click="(isVisible = false), removeNotification(notification.id)">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor" fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>

                <!-- Success Notification  -->
                <template x-if="notification.variant === 'success'">                
                    <div x-data="{ isVisible: false, timeout: null }" x-cloak x-show="isVisible" class="pointer-events-auto relative rounded-2xl bg-violet-50 text-slate-600 dark:bg-indigo-950 dark:text-violet-100" role="alert" x-on:pause-auto-dismiss.window="clearTimeout(timeout)" x-on:resume-auto-dismiss.window=" timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)" x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id)}, displayDuration))" x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0" x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in" x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24" x-transition:leave-start="translate-x-0 opacity-100">
                        <div class="flex w-full items-center gap-2.5 bg-green-400/10 rounded-2xl p-4 transition-all duration-300">

                            <!-- Icon -->
                            <div class="rounded-full bg-green-400/15 p-0.5 text-green-400" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Title & Message -->
                            <div class="flex flex-col gap-2">
                                <h3 x-cloak x-show="notification.title" class="text-sm font-semibold text-green-400" x-text="notification.title"></h3>
                                <p x-cloak x-show="notification.message" class="text-pretty text-sm" x-text="notification.message"></p>
                            </div>

                            <!--Dismiss Button -->
                            <button type="button" class="ml-auto" aria-label="dismiss notification" x-on:click="(isVisible = false), removeNotification(notification.id)">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor" fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>

                <!-- Warning Notification  -->
                <template x-if="notification.variant === 'warning'">                
                    <div x-data="{ isVisible: false, timeout: null }" x-cloak x-show="isVisible" class="pointer-events-auto relative rounded-2xl bg-violet-50 text-slate-600 dark:bg-indigo-950 dark:text-violet-100" role="alert" x-on:pause-auto-dismiss.window="clearTimeout(timeout)" x-on:resume-auto-dismiss.window=" timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)" x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id)}, displayDuration))" x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0" x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in" x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24" x-transition:leave-start="translate-x-0 opacity-100">
                        <div class="flex w-full items-center gap-2.5 bg-amber-500/10 rounded-2xl p-4 transition-all duration-300">

                            <!-- Icon -->
                            <div class="rounded-full bg-amber-500/15 p-0.5 text-amber-500" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Title & Message -->
                            <div class="flex flex-col gap-2">
                                <h3 x-cloak x-show="notification.title" class="text-sm font-semibold text-amber-500" x-text="notification.title"></h3>
                                <p x-cloak x-show="notification.message" class="text-pretty text-sm" x-text="notification.message"></p>
                            </div>

                            <!--Dismiss Button -->
                            <button type="button" class="ml-auto" aria-label="dismiss notification" x-on:click="(isVisible = false), removeNotification(notification.id)">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor" fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>

                <!-- Danger Notification  -->
                <template x-if="notification.variant === 'danger'">                
                    <div x-data="{ isVisible: false, timeout: null }" x-cloak x-show="isVisible" class="pointer-events-auto relative rounded-2xl bg-violet-50 text-slate-600 dark:bg-indigo-950 dark:text-violet-100" role="alert" x-on:pause-auto-dismiss.window="clearTimeout(timeout)" x-on:resume-auto-dismiss.window=" timeout = setTimeout(() => {(isVisible = false), removeNotification(notification.id) }, displayDuration)" x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id)}, displayDuration))" x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0" x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in" x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24" x-transition:leave-start="translate-x-0 opacity-100">
                        <div class="flex w-full items-center gap-2.5 bg-red-500/10 rounded-2xl p-4 transition-all duration-300">

                            <!-- Icon -->
                            <div class="rounded-full bg-red-500/15 p-0.5 text-red-500" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Title & Message -->
                            <div class="flex flex-col gap-2">
                                <h3 x-cloak x-show="notification.title" class="text-sm font-semibold text-red-500" x-text="notification.title"></h3>
                                <p x-cloak x-show="notification.message" class="text-pretty text-sm" x-text="notification.message"></p>
                            </div>

                            <!--Dismiss Button -->
                            <button type="button" class="ml-auto" aria-label="dismiss notification" x-on:click="(isVisible = false), removeNotification(notification.id)">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor" fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            
                <!-- Message Notification  -->
                <template x-if="notification.variant === 'message'">                
                    <div x-data="{ isVisible: false, timeout: null }" x-cloak x-show="isVisible" class="pointer-events-auto relative rounded-2xl bg-violet-50 text-slate-600 dark:bg-indigo-950 dark:text-violet-100" role="alert" x-on:pause-auto-dismiss.window="clearTimeout(timeout)" x-on:resume-auto-dismiss.window="timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id) }, displayDuration)" x-init="$nextTick(() => { isVisible = true }), (timeout = setTimeout(() => { isVisible = false, removeNotification(notification.id) }, displayDuration))" x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0" x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in" x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24" x-transition:leave-start="translate-x-0 opacity-100">
                        <div class="flex w-full rounded-2xl items-center gap-2.5 bg-violet-100 p-4 transition-all duration-300 dark:bg-violet-950">
                            <div class="flex w-full items-center gap-2.5">
                                    
                                <!-- Avatar -->    
                                <img x-cloak x-show="notification.sender.avatar" class="mr-2 size-12 rounded-full" alt="avatar" aria-hidden="true" x-bind:src="notification.sender.avatar"/>
                                <div class="flex flex-col items-start gap-2">
                                    <!-- Title & Message -->     
                                    <h3 x-cloak x-show="notification.sender.name" class="text-sm font-semibold text-purple-800 dark:text-white" x-text="notification.sender.name"></h3>
                                    <p x-cloak x-show="notification.message" class="text-pretty text-sm" x-text="notification.message"></p>

                                    <!-- Action Buttons -->
                                    <div class="flex items-center gap-4">
                                        <button type="button" class="cursor-pointer whitespace-nowrap bg-transparent text-center text-sm font-bold tracking-wide text-orange-400 transition hover:opacity-75 active:opacity-100 dark:text-orange-600">Reply</button>
                                        <button type="button" class="cursor-pointer whitespace-nowrap bg-transparent text-center text-sm font-bold tracking-wide text-slate-600 transition hover:opacity-75 active:opacity-100 dark:text-violet-100" x-on:click=" (isVisible = false), setTimeout(() => { removeNotification(notification.id) }, 400)">Dismiss</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Dismiss Button -->
                            <button type="button" class="ml-auto" aria-label="dismiss notification" x-on:click="(isVisible = false), removeNotification(notification.id)">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor" fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>

            </div>
        </template>
    </div>
</div>    
