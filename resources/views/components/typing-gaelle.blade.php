<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<span
    x-data="{
        text: '',
        textArray : ['Data Analyst'],
        textIndex: 0,
        charIndex: 0,
        typeSpeed: 110,
        cursorSpeed: 550,
        pauseEnd: 1500,
        pauseStart: 20,
        direction: 'forward',
    }"
    x-init="$nextTick(() => {
        let typingInterval = setInterval(startTyping, $data.typeSpeed);

        function startTyping(){
            let current = $data.textArray[ $data.textIndex ];

            // check to see if we hit the end of the string
            if($data.charIndex > current.length){
                    $data.direction = 'backward';
                    clearInterval(typingInterval);

                    setTimeout(function(){
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseEnd);
            }

            $data.text = current.substring(0, $data.charIndex);

            if($data.direction == 'forward')
            {
                $data.charIndex += 1;
            }
            else
            {
                if($data.charIndex == 0)
                {
                    $data.direction = 'forward';
                    clearInterval(typingInterval);
                    setTimeout(function(){
                        $data.textIndex += 1;
                        if($data.textIndex >= $data.textArray.length)
                        {
                            $data.textIndex = 0;
                        }
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseStart);
                }
                $data.charIndex -= 1;
            }
        }

        setInterval(function(){
            if($refs.cursor.classList.contains('hidden'))
            {
                $refs.cursor.classList.remove('hidden');
            }
            else
            {
                $refs.cursor.classList.add('hidden');
            }
        }, $data.cursorSpeed);

    })"
    class="m-w-fit flex py-10 sm:py-0">
    <span class="relative flex items-center justify-center h-24">
        <span class="text-red-600 dark:text-red-600 font-black leading-tight" x-text="text"></span>
        <span class="absolute right-0 w-2 -mr-2 bg-black h-3/4" x-ref="cursor"></span>
    </span>
</span>
