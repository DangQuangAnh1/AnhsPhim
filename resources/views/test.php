<div class='message'>
                            <form action= $rou method='post'>
                                <input type='hidden' name='_token' value=$csrf>
                                <div class='avatar_box'>
                                    <img src='/storage/images/avatar.jpg' alt=''>
                                </div>
                                <div class='message_box'>
                                    <input type='hidden' value='$feed->feed_id' name='feed_id'>
                                    <div class='user_name'>$user_chat</div>
                                    <div class='detail_message dem1'>$feed->message</div>
                                    <div class ='create_at'>
                                        <div>Create_at: $feed->create_at</div>
                                        <div>Update_at: $feed->update_at</div>
                                    </div>
                                    <div class='detail_message'>
                                        <input type='submit' value='Xóa' name='delete_feed'>
</div>
                                </div>
                                </div>
                            </form>
                            </div>